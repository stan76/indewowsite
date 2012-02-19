<?php
set_time_limit(0);
ini_set("default_charset", "UTF-8");
set_magic_quotes_runtime(false);
function execute_query($query, $error = "")
{
	$query_result = @mysql_query($query);
	if($query_result)
		return $query_result;
	else
	{
		die($error.mysql_error());
		return false;
	}
}
function switchConnection($db_type, $realm_name)
{
	global $characters_DB, $realmd_DB, $realms;
	switch($db_type)
	{
		case "realmd": $needed_db = $realmd_DB[$realms[$realm_name][0]]; break;
		case "characters": $needed_db = $characters_DB[$realms[$realm_name][1]]; break;
	}
	mysql_connect($needed_db[0], $needed_db[1], $needed_db[2]) or die("Unable to connect to SQL host of ".$db_type." DB of realm ".$realm_name.": ".mysql_error());
	mysql_select_db($needed_db[3]) or die("Unable to connect to ".$db_type." DB of realm ".$realm_name.": ".mysql_error());
	execute_query("SET NAMES 'utf8'");
}
function initialize_user()
{
	global $ip_voting_period;
	switchConnection("realmd", $_SESSION["realm"]);
	// Table voting_points
	$get_voting_points = execute_query("SELECT `points`, `date`, `date_points` FROM `voting_points` WHERE `id` = ".$_SESSION["user_id"]." LIMIT 1");
	if(mysql_num_rows($get_voting_points))
	{
		$row = mysql_fetch_assoc($get_voting_points);
		$_SESSION["points"] = $row["points"];
		$today = date("Ymd");
		if($row["date"] <> $today)
		{
			execute_query("UPDATE `voting_points` SET `date` = '".$today."', `date_points` = 0 WHERE `id` = ".$_SESSION["user_id"]." LIMIT 1");
			$_SESSION["date"] = $today;
			$_SESSION["date_points"] = 0;
		}
		else
		{
			$_SESSION["date"] = $row["date"];
			$_SESSION["date_points"] = $row["date_points"];
		}
	}
	else
	{
		execute_query("INSERT INTO `voting_points` (`id`) VALUES (".$_SESSION["user_id"].")");
		$_SESSION["points"] = 0;
		$_SESSION["date"] = date("Ymd");
		$_SESSION["date_points"] = 0;
	}
	// Table voting
	$get_voting = execute_query("SELECT `sites`, `time` FROM `voting` WHERE `user_ip` LIKE '".$_SERVER["REMOTE_ADDR"]."' LIMIT 1");
	if(mysql_num_rows($get_voting))
	{
		$row = mysql_fetch_assoc($get_voting);
		$_SESSION["time"] = $row["time"];
		if((time() - $row["time"]) > $ip_voting_period)
		{
			execute_query("UPDATE `voting` SET `sites` = 0 WHERE `user_ip` LIKE '".$_SERVER["REMOTE_ADDR"]."' LIMIT 1");
			$_SESSION["sites"] = 0;
		}
		else
			$_SESSION["sites"] = $row["sites"];
	}
	else
	{
		execute_query("INSERT INTO `voting` (`user_ip`) VALUES ('".$_SERVER["REMOTE_ADDR"]."')");
		$_SESSION["sites"] = 0;
		$_SESSION["time"] = 0;
	}
}
function sec_to_dhms($sec, $show_days = false)
{
	global $language;
	$days = intval($sec / 86400);
	$hours = intval(($sec / 3600) % 24);
	$minutes = intval(($sec / 60) % 60);
	$seconds = intval($sec % 60);
	return $days." ".$language["days"].", ".$hours." ".$language["hours"].", ".$minutes." ".$language["minutes_and"]." ".$seconds." ".$language["seconds"]."";
}
function vote($site)
{
	global $max_acc_points_per_day, $open_vote_site, $tab_sites, $use_online_check;
	if(isset($tab_sites[$site]))
	{
		if($use_online_check)
			$fp = @fsockopen($tab_sites[$site][0], 80, $errno, $errstr, 3);
		else
			$fp = True;
		if(!($site & $_SESSION["sites"]) && ($_SESSION["date_points"] < $max_acc_points_per_day) && $fp)
		{
			echo "<script type=\"text/javascript\">setTimeout(window.open('",$tab_sites[$site][1],"', '",($open_vote_site ? "_self" : "_blank"),"'),0);</script>";
			if($use_online_check)
				fclose($fp);
			switchConnection("realmd", $_SESSION["realm"]);
			execute_query("UPDATE `voting` SET `sites`=(`sites` | ".$site."), `time`='".time()."' WHERE `user_ip` LIKE '".$_SERVER["REMOTE_ADDR"]."' LIMIT 1");
			$_SESSION["sites"] += $site;
			$_SESSION["time"] = time();
			execute_query("UPDATE `voting_points` SET `points`=(`points` + ".$tab_sites[$site][3]."), `date_points`=(`date_points` + ".$tab_sites[$site][3].") WHERE `id` = ".$_SESSION["user_id"]." LIMIT 1");
			$_SESSION["points"] += $tab_sites[$site][3];
			$_SESSION["date_points"] += $tab_sites[$site][3];
		}
	}
}
function show_sites()
{
	global $max_acc_points_per_day, $language, $tab_sites, $use_online_check;
	echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"3\" align=\"center\">
	<tr>
		<th class=\"input\" colspan=\"5\">",$language["chose_site"],"</th>
	</tr>
	<tr>
		<th class=\"input\">",$language["voting_sites"],"</th>
		<th class=\"input\">",$language["voted"],"</th>";
	if($use_online_check)
		echo "<th class=\"input\">",$language["status"],"</th>";
	echo "<th class=\"input\">",Points,"</th>
		<th class=\"input\">",$language["choose"],"</th>
	</tr>";
	foreach($tab_sites as $key => $value)
	{
		echo "<form action=\"index.php\" method=\"post\"><input type=\"hidden\" name=\"site\" value=\"",$key,"\" />
		<tr>
			<td class=\"input\"><img src=\"",$value[2],"\" border=\"0\" alt=\"",$value[0],"\" /></td>
		<td class=\"input\">";
		if($_SESSION["date_points"] >= $max_acc_points_per_day)
			$disabled = " disabled=\"disabled\"";
		else
			$disabled = "";
		if($_SESSION["sites"] & $key)
		{
			echo "<b><font color=\"red\">",$language["yes"],"</font></b>";
			$disabled = " disabled=\"disabled\"";
		}
		else
			echo "<b><font color=\"green\">",$language["no"],"</font></b>";
		echo "</td>";
		if($use_online_check)
		{
			echo "<td class=\"input\">";
			$fp = @fsockopen($value[0], 80, $errno, $errstr, 3);
			if($fp)
			{
				echo "<b><font color=\"green\">",$language["online"],"</font></b>";
				fclose($fp);
			}
			else
			{
				echo "<b><font color=\"red\">",$language["offline"],"</font></b>";
				$disabled = " disabled=\"disabled\"";
			}
			echo "</td>";
		}
		echo "<td class=\"input\">",$value[3],"</td>
		<td class=\"input\"><input class=\"input\" type=\"submit\" name=\"submit\" value=\"",$language["choose"],"\"",$disabled," /></td>
		</tr></form>";
	}
	echo "</table>";
}
function show_chars_menu()
{
	switchConnection("characters", $_SESSION["realm"]);
	$results = execute_query("SELECT `guid`, `name` FROM `characters` WHERE `account` = ".$_SESSION["user_id"]);
	while($row = mysql_fetch_assoc($results))
		echo "<option value=\"",$row["guid"],"\">",$row["name"],"</option>";
}
function add_char_to_session($guid)
{
	switchConnection("characters", $_SESSION["realm"]);
	$_SESSION["char_name"] = mysql_result(execute_query("SELECT `name` FROM `characters` WHERE `account` = ".$_SESSION["user_id"]." AND `guid` = ".$guid." LIMIT 1"), 0);
}
function show_rewards()
{
	global $langs, $language, $reward_texts, $set_lang, $tab_rewards;
	echo "<script type=\"text/javascript\" src=\"http://www.wowhead.com/widgets/power.js\"></script>
	<table border=\"0\" cellspacing=\"1\" cellpadding=\"3\" align=\"center\">
	<tr>
		<th class=\"input\" colspan=\"3\">",$language["available_rewards"],"</th>
	</tr>";
	foreach($tab_rewards as $key => $value)
	{
		if($value[2] > $_SESSION["points"])
			$disabled = " disabled=\"disabled\"";
		else
			$disabled = "";
		echo "<form action=\"index.php\" method=\"post\"><input type=\"hidden\" name=\"reward\" value=\"",$key,"\" />
		<tr><td class=\"input\" align=\"left\">";
		if($value[0] && $value[3] >= 0)
			echo $value[1]," x <a class=\"q",$value[3],"\" href=\"http://",$langs[$set_lang][1],".wowhead.com/?item=",$value[0],"\" target=\"_blank\">",$reward_texts[$langs[$set_lang][2]][$key],"</a>";
		else
			echo $reward_texts[$langs[$set_lang][2]][$key];
		echo "</td>
		<td class=\"input\">",$value[2]," ",$language["points_2"],"</td>
		<td class=\"input\"><input class=\"input\" type=\"submit\" name=\"submit\" value=\"",$language["choose"],"\"",$disabled," /></td></tr></form>";
	}
	echo "</table>";
}
function chose_reward($reward)
{
	global $langs, $language, $mangos_rev, $realms, $remote_access, $reward_texts, $set_lang, $tab_rewards;
	if(!isset($tab_rewards[$reward]))
		return "";
	if($_SESSION["points"] < $tab_rewards[$reward][2])
		return "";
	$remote = $remote_access[$realms[$_SESSION["realm"]][2]];
	$connection = @fsockopen($remote[0], $remote[1], $errno, $errstr, 3);
	if($connection)
	{
		fgets($connection,1024); // Motd
		if($mangos_rev)
			fputs($connection, "USER ".$remote[2]."\n");
		else
		{
			fgets($connection,1024); // USER
			fputs($connection, $remote[2]."\n");
		}
		sleep(3);
		if($mangos_rev)
			fputs($connection, "PASS ".$remote[3]."\n");
		else
		{
			fgets($connection,1024); // PASS
			fputs($connection, $remote[3]."\n");
		}
		sleep(3);
		$remote_login = fgets($connection,1024);
		if($remote_login[0] == "+")
		{
			if($tab_rewards[$reward][0])
				fputs($connection, "send items ".$_SESSION["char_name"]." \"".$language["mail_subject"]."\" \"".$language["mail_message"]."\" ".$tab_rewards[$reward][0].":".$tab_rewards[$reward][1]."\n");
			else
				fputs($connection, "send money ".$_SESSION["char_name"]." \"".$language["mail_subject"]."\" \"".$language["mail_message"]."\" ".$tab_rewards[$reward][1]."\n");
			sleep(5);
			$send_mail = fgets($connection,1024);
			if(strpos($send_mail, $_SESSION["char_name"]))
			{
				switchConnection("realmd", $_SESSION["realm"]);
				execute_query("UPDATE `voting_points` SET `points`=(`points` - ".$tab_rewards[$reward][2].") WHERE `id` = ".$_SESSION["user_id"]." LIMIT 1");
				$_SESSION["points"] -= $tab_rewards[$reward][2];
				$message = "<font color=\"yellow\">".$language["was_given"]." ".$reward_texts[$langs[$set_lang][2]][$reward]." ".$language["to"]." ".$_SESSION["char_name"]."</font>";
			}
			else
				$message = "<font color=\"red\">Send Mail Problem: ".$send_mail."</font>";
		}
		else
			$message = "<font color=\"red\">Remote Login Problem: ".$remote_login."</font>";
		fclose($connection);
	}
	else
		$message = "<font color=\"red\">Connection Problem: ".$errstr."</font>";
	return $message."<br />";
}
function chose_reward_soap($reward)
{
	global $langs, $language, $mangos_rev, $realms, $remote_access, $reward_texts, $set_lang, $tab_rewards;
	if(!isset($tab_rewards[$reward]))
		return "";
	if($_SESSION["points"] < $tab_rewards[$reward][2])
		return "";
	$remote = $remote_access[$realms[$_SESSION["realm"]][2]];
	if($tab_rewards[$reward][0])
		$command = "send items ".$_SESSION["char_name"]." \"".$language["mail_subject"]."\" \"".$language["mail_message"]."\" ".$tab_rewards[$reward][0].":".$tab_rewards[$reward][1];
	else
		$command = "send money ".$_SESSION["char_name"]." \"".$language["mail_subject"]."\" \"".$language["mail_message"]."\" ".$tab_rewards[$reward][1];
	$client = new SoapClient(NULL,
	array(
	"location" => "http://".$remote[0].":".$remote[1]."/",
	"uri" => "urn:MaNGOS",
	"style" => SOAP_RPC,
	"login" => $remote[2],
	"password" => $remote[3],
	));
	try
	{
		$result = $client->executeCommand(new SoapParam($command, "command"));
		switchConnection("realmd", $_SESSION["realm"]);
		execute_query("UPDATE `voting_points` SET `points`=(`points` - ".$tab_rewards[$reward][2].") WHERE `id` = ".$_SESSION["user_id"]." LIMIT 1");
		$_SESSION["points"] -= $tab_rewards[$reward][2];
		$message = $language['was_given']." ".$reward_texts[$langs[$set_lang][2]][$reward]." ".$language['to']." ".$_SESSION['char_name'];
	}
	catch(Exception $e)
	{
		$message = "Send Mail Problem: ".($e->getMessage());
	}
	return $message."<br />";
}
?>