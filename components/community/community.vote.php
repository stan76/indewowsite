<?php
if(INCLUDED!==true)exit;
// ==================== //
$pathway_info[] = array('title'=>$lang['vote'],'link'=>'index.php?n=community&sub=vote');
// ==================== //

// Here we chack to see if user is logged in, if not, then redirect to account login screen
if($user['id']<=0){
    redirect('index.php?n=account&sub=login',1);
}else{
}
?>
<?php
// Here we see if the site admin has the vote system enabled
if ((int)$MW->getConfig->vote_system->enable){
    $showvote = true;
}else{ 
$showvote = false;
}

// Including the needed files to make the vote system work
require "vote/sites.php";
require "vote/rewards.php";

// Check to see what realm we are using
$realm_info_new = get_realm_byid($user['cur_selected_realmd']);
$rid = $realm_info_new['id'];

// Some glabal settings. You shouldnt need to touch this stuff
$max_acc_points_per_day = $MW->getConfig->vote_system->max_points_per_day;
$ip_voting_period = 60 * 60 * 24; // IP voting period (in seconds)
$online_check = $MW->getConfig->vote_system->use_online_check; // See if the sites are online
if($online_check==1)
	$use_online_check = true;
	else
	$use_online_check = false;

// Here we get the Remote Access information from the database for our current selected realm
$getinfo = $DB->select("SELECT `ra_address`, `ra_port`, `ra_user`, `ra_pass` FROM `realmlist` WHERE id='$rid'");
foreach($getinfo as $rdinfo) {
$a = $rdinfo['ra_address'];
$pt = $rdinfo['ra_port'];
$u = $rdinfo['ra_user'];
$p = $rdinfo['ra_pass'];
}
$remote_access = array($a, $pt, $u, $p);

// Here we get what version of mangos to use. This isnt the best way to get the info, but its ok for now
$find_rev = $DB->select("SELECT realmbuilds FROM realmlist WHERE id='$rid'");
if($find_rev > 10504) 
	$mangos_rev = 0;
else
	$mangos_rev = 1;

// Lets get this session started!
session_start();
		$_SESSION["realm_vote"] = $realm_info_new['name'];
		$_SESSION["logged_voting"] = 1;
		$_SESSION["panel"] = "reward";
		$_SESSION["vote"] = 1;
		$_SESSION["reward"] = 1;
		$_SESSION["user_id"] = $user['id'];
		$_SESSION["user_name"] = $user['username'];
		$_SESSION["char_name"] = $user['character_name'];

// Functions
set_time_limit(0);
ini_set("default_charset", "UTF-8");
set_magic_quotes_runtime(false);

// This get the vote started by getting your vote account info
function initialize_user()
{
	global $ip_voting_period, $DB;

	// Table voting_points
	$get_voting_points = $DB->select("SELECT `points`, `date`, `date_points` FROM `voting_points` WHERE `id` = ".$_SESSION["user_id"]." LIMIT 1");
	if (count($get_voting_points) > 0){
    foreach ($get_voting_points as $row) 
	{
		$_SESSION["points"] = $row["points"];
		$today = date("Ymd");
		if($row["date"] <> $today)
		{
			$DB->query("UPDATE `voting_points` SET `date` = '".$today."', `date_points` = 0 WHERE `id` = ".$_SESSION["user_id"]." LIMIT 1");
			$_SESSION["date"] = $today;
			$_SESSION["date_points"] = 0;
		}
		else
		{
			$_SESSION["date"] = $row["date"];
			$_SESSION["date_points"] = $row["date_points"];
		}
	}
	}
	else
	{
		$DB->query("INSERT INTO `voting_points` (`id`) VALUES (".$_SESSION["user_id"].")");
		$_SESSION["points"] = 0;
		$_SESSION["date"] = date("Ymd");
		$_SESSION["date_points"] = 0;
	}
	// Table voting
	$get_voting = $DB->query("SELECT `sites`, `time` FROM `voting` WHERE `user_ip` LIKE '".$_SERVER["REMOTE_ADDR"]."' LIMIT 1");
	if (count($get_voting) > 0){
    foreach ($get_voting as $row) 
	{
		$_SESSION["time"] = $row["time"];
		if((time() - $row["time"]) > $ip_voting_period)
		{
			$DB->query("UPDATE `voting` SET `sites` = 0 WHERE `user_ip` LIKE '".$_SERVER["REMOTE_ADDR"]."' LIMIT 1");
			$_SESSION["sites"] = 0;
		}
		else
			$_SESSION["sites"] = $row["sites"];
	}
	}
	else
	{
		$DB->query("INSERT INTO `voting` (`user_ip`) VALUES ('".$_SERVER["REMOTE_ADDR"]."')");
		$_SESSION["sites"] = 0;
		$_SESSION["time"] = 0;
	}
}
function sec_to_dhms($sec, $show_days = false)
{
	global $lang;
	$days = intval($sec / 86400);
	$hours = intval(($sec / 3600) % 24);
	$minutes = intval(($sec / 60) % 60);
	$seconds = intval($sec % 60);
	return $days." ".$lang["rs_days"].", ".$hours." ".$lang["rs_hours"].", ".$minutes." ".$lang["rs_minutes"]." ".$seconds." ".$lang["rs_seconds"]."";
}
function vote($site)
{
	global $max_acc_points_per_day, $tab_sites, $use_online_check, $DB, $CHDB;
	if(array_key_exists($site, $tab_sites))
	{
		if($use_online_check)
			$fp = @fsockopen($tab_sites[$site][0], 80, $errno, $errstr, 3);
		else
			$fp = True;
		if(!($site & $_SESSION["sites"]) && ($_SESSION["date_points"] < $max_acc_points_per_day) && $fp)
		{
			echo "<script type=\"text/javascript\">setTimeout(window.open('",$tab_sites[$site][1],"', '_self'),0);</script>";
			if($use_online_check)
				fclose($fp);
			$DB->query("UPDATE `voting` SET `sites`=(`sites` | ".$site."), `time`='".time()."' WHERE `user_ip` LIKE '".$_SERVER["REMOTE_ADDR"]."' LIMIT 1");
			$_SESSION["sites"] += $site;
			$_SESSION["time"] = time();
			$DB->query("UPDATE `voting_points` SET `points`=(`points` + ".$tab_sites[$site][3]."), `date_points`=(`date_points` + ".$tab_sites[$site][3].") WHERE `id` = ".$_SESSION["user_id"]." LIMIT 1");
			$_SESSION["points"] += $tab_sites[$site][3];
			$_SESSION["date_points"] += $tab_sites[$site][3];
		}
	}
}
function show_sites()
{
	global $max_acc_points_per_day, $lang, $tab_sites, $use_online_check;
	echo write_metalborder_header(); echo
"<table border=\"0\" width=\"550\" cellspacing=\"0\" cellpadding=\"3\" align=\"center\">
	<tr>
		<td class=\"rankingHeader\" align=\"center\" colspan=\"5\" nowrap=\"nowrap\">",$lang["choose_site"],"</td>
	</tr>
	<tr>
		<td class=\"rankingHeader\" align=\"center\" nowrap=\"nowrap\">",$lang["voting_sites"],"</td>
		<td class=\"rankingHeader\" align=\"center\" nowrap=\"nowrap\">",$lang["voted"],"</td>";
	if($use_online_check)
		echo "<td class=\"rankingHeader\" align=\"center\" nowrap=\"nowrap\">",$lang["status"],"</td>";
	echo "<td class=\"rankingHeader\" align=\"center\" nowrap=\"nowrap\">",$lang["points"],"</td>
		<td class=\"rankingHeader\" align=\"center\" nowrap=\"nowrap\">",$lang["choose"],"</td>
	</tr>";
	foreach($tab_sites as $key => $value)
	{
		echo "<form action=\"index.php?n=community&sub=vote\" method=\"post\" target=\"_blank\"><input type=\"hidden\" name=\"site\" value=\"",$key,"\" />
		<tr>
			<td class=\"serverStatus1\" align=\"center\"><img src=\"",$value[2],"\" border=\"0\" alt=\"",$value[0],"\" /></td>
		<td class=\"serverStatus1\" align=\"center\">";
		if($_SESSION["date_points"] >= $max_acc_points_per_day)
			$disabled = " disabled=\"disabled\"";
		else
			$disabled = "";
		if($_SESSION["sites"] & $key)
		{
			echo "<center><b style=\"color: rgb(102, 13, 2);\">",$lang["yes"],"</b></center>";
			$disabled = " disabled=\"disabled\"";
		}
		else
			echo "<center><b style=\"color: rgb(35, 67, 3);\">",$lang["no"],"</b></center>";
		echo "</td>";
		if($use_online_check)
		{
			echo "<td class=\"serverStatus1\" align=\"center\">";
			$fp = @fsockopen($value[0], 80, $errno, $errstr, 3);
			if($fp)
			{
				echo "<center><b style=\"color: rgb(35, 67, 3);\">",$lang["onlinealt"],"</b></center>";
				fclose($fp);
			}
			else
			{
				echo "<center><b style=\"color: rgb(102, 13, 2);\">",$lang["offline"],"</b></center>";
				$disabled = " disabled=\"disabled\"";
			}
			echo "</td>";
		}
		echo "<td class=\"serverStatus1\" align=\"center\"><center>",$value[3],"</center></td>
		<td class=\"serverStatus1\" align=\"center\"><center><input type=\"submit\" name=\"submit\" target=\"_blank\" value=\"",$lang["choose"],"\"",$disabled," /></center></td>
		</tr></form>";
	}
	echo "</table>";
	echo write_metalborder_footer();
}

function show_rewards()
{
	global $lang, $reward_texts, $tab_rewards;
	echo write_metalborder_header(); echo
	"<script type=\"text/javascript\" src=\"http://www.wowhead.com/widgets/power.js\"></script>
	<table border=\"0\" cellspacing=\"0\" width=\"550\" cellpadding=\"3\" align=\"center\">
	<tr>
		<td class=\"rankingHeader\" align=\"center\" colspan=\"5\" nowrap=\"nowrap\">",$lang["available_awards"],"</td>
	</tr>
	<tr>
		<td class=\"rankingHeader\" align=\"left\" colspan=\"1\" nowrap=\"nowrap\"><center>R&eacute;compenses<center></td>
		<td class=\"rankingHeader\" align=\"center\" colspan=\"1\" nowrap=\"nowrap\">Co&ucirc;t</td>
		<td class=\"rankingHeader\" align=\"center\" colspan=\"1\" nowrap=\"nowrap\">Choisissez</td>
	</tr>"
	
	;
	foreach($tab_rewards as $key => $value)
	{
		if($value[2] > $_SESSION["points"])
			$disabled = " disabled=\"disabled\"";
		else
			$disabled = "";
		echo "<form action=\"index.php?n=community&sub=vote\" method=\"post\"><input type=\"hidden\" name=\"reward\" value=\"",$key,"\" />
		<tr><td class=\"serverStatus2\" align=\"left\">";
		if($value[0] && $value[3] >= 0)
			echo $value[1]," x <a class=\"q",$value[3],"\" href=\"http://fr.wowhead.com/?item=",$value[0],"\" target=\"_blank\">",$reward_texts[0][$key],"</a>";
		else
			echo $reward_texts[0][$key];
		echo "</td>
		<td class=\"serverStatus2\" align=\"center\"><center>",$value[2]," ",$lang["points2"],"</center></td>
		<td class=\"serverStatus2\" align=\"center\"><center><input type=\"submit\" name=\"submit\" value=\"",$lang["choose"],"\"",$disabled," /></center></td></tr></form>";
	}
	echo "</table>";
	echo write_metalborder_footer();
}
function chose_reward($reward)
{
	global $lang, $mangos_rev, $vote_realms, $remote_access, $reward_texts, $tab_rewards, $DB;
	if(!array_key_exists($reward, $tab_rewards))
		return "";
	if($_SESSION["points"] < $tab_rewards[$reward][2])
		return "";
	$remote = $remote_access;
	$telnet = @fsockopen($remote[0], $remote[1], $errno, $errstr, 3);
	if($telnet)
	{
		fgets($telnet,1024); // Motd
		if($mangos_rev==1)
			fputs($telnet, "USER ".$remote[2]."\n");
		else
		{
			fgets($telnet,1024); // USER
			fputs($telnet, $remote[2]."\n");
		}
		sleep(3);
		if($mangos_rev==1)
			fputs($telnet, "PASS ".$remote[3]."\n");
		else
		{
			fgets($telnet,1024); // PASS
			fputs($telnet, $remote[3]."\n");
		}
		sleep(3);
		$remote_login = fgets($telnet,1024);
		if($remote_login[0] == "+")		
		{
			if($tab_rewards[$reward][0])
				fputs($telnet, "send items ".$_SESSION["char_name"]." \"".$lang["mail_subject"]."\" \"".$lang["mail_message"]."\" ".$tab_rewards[$reward][0].":".$tab_rewards[$reward][1]."\n");
			else
				fputs($telnet, "send money ".$_SESSION["char_name"]." \"".$lang["mail_subject"]."\" \"".$lang["mail_message"]."\" ".$tab_rewards[$reward][1]."\n");
			sleep(5);
			$send_mail = fgets($telnet,1024);
			if(strpos($send_mail, $_SESSION["char_name"]))
			{
				$DB->query("UPDATE `voting_points` SET `points`=(`points` - ".$tab_rewards[$reward][2].") WHERE `id` = ".$_SESSION["user_id"]." LIMIT 1");
				$_SESSION["points"] -= $tab_rewards[$reward][2];
				$message = "<font color=\"blue\">".$lang["was_given"]." ".$reward_texts[0][$reward]." ".$lang["to"]." ".$_SESSION["char_name"]."</font>";
			}
			else
				$message = "<font color=\"red\">Message d'erreur: ".$send_mail."</font>";
		}
		else
			$message = "<font color=\"red\">Probl&egrave;me de connexion &agrave; distance: ".$remote_login."</font>";
		fclose($telnet);
	}
	else
		$message = "<font color=\"red\">Probl&egrave;me de connexion Telnet: ".$errstr."</font>";
	return $message."<br />";
}
?>