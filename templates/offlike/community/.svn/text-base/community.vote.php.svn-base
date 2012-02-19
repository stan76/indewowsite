<br>
<?php builddiv_start(1, $lang['vote']) ?>
<style>
div.errorMsg { width: 60%; height: 30px; line-height: 30px; font-size: 10pt; border: 2px solid #e03131; background: #ff9090;}
</style>
<?php
if ($showvote == false){
?>
<center>
<div class="errorMsg"><b><?php echo $lang['chat_disable'] ?></b></div>
</center>
<?php
}else{
?>
<?php
if(isset($_POST["logout"]) || !isset($_SESSION["logged_voting"]))
{
	if(isset($_POST["logout"]))
		session_destroy();
	echo "<meta http-equiv=refresh content=\"0;url=index.php?n=community&sub=login\">";
	exit();
}
initialize_user();
if($max_acc_points_per_day < 0)
	$max_acc_points_per_day = count($tab_sites);
if($_SESSION["vote"] == 1)
{
	if(isset($_POST["site"]))
		vote((int) $_POST["site"]);
}
if($_SESSION["reward"] == 1)
{
	$reward_message = "";
	if(isset($_POST["reward"]))
		$reward_message = chose_reward((int) $_POST["reward"]);
	else if(isset($_POST["character"]))
		add_char_to_session((int) $_POST["character"]);
}
?>
<font color=green><b><?php echo $lang['vote_desc1']; ?></b></font>
<div class="contentdiv">
<style type="text/css">
  div.noErrorMsg { width: 80%; height: 30px; line-height: 30px; font-size: 10pt; border: 2px solid #00ff24; background: #afffa9;}
  div.errorMsg { width: 80%; height: 30px; line-height: 30px; font-size: 10pt; border: 2px solid #e03131; background: #ff9090;}
  td.serverStatus1 { font-weight: bold; border-style: solid; border-width: 0px 1px 1px 0px; border-color: #D8BF95; }
  td.serverStatus2 { border-style: solid; border-width: 0px 1px 1px 0px; border-color: #D8BF95; }
  td.serverStatus3 { border-style: solid; border-width: 0px 1px 1px 0px; border-color: #D8BF95; background-color: #C3AD89; }
  td.rankingHeader { color: #C7C7C7; font-size: 10pt; font-family: arial,helvetica,sans-serif; font-weight: bold; background-color: #2E2D2B; border-style: solid; border-width: 1px; border-color: #5D5D5D #5D5D5D #1E1D1C #1E1D1C; padding: 3px;}
</style>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>

    <td width="12"><img src="templates/WotLK/images/metalborder-top-left.gif" alt="" width="12" height="12"></td>
    <td style="background: transparent url(templates/WotLK/images/metalborder-top.gif) repeat scroll 0% 0%; -moz-background-clip: border; -moz-background-origin: padding; -moz-background-inline-policy: continuous;"></td>
    <td width="12"><img src="templates/WotLK/images/metalborder-top-right.gif" alt="" width="12" height="12"></td>
</tr>
<tr>
    <td style="background: transparent url(templates/WotLK/images/metalborder-left.gif) repeat scroll 0% 0%; -moz-background-clip: border; -moz-background-origin: padding; -moz-background-inline-policy: continuous;"></td>
    <td>
    <table width="100%" cellpadding="3" cellspacing="0">
    <tbody>
        <tr>

            <td class="rankingHeader" colspan="3" align="center" nowrap="nowrap"><?php echo $lang['vote_acct'] ?></td>
        </tr>

		<tr>
            <td class="rankingHeader" align="center" nowrap="nowrap"><?php echo $lang['vote_curacct']; ?></td>
            <td class="rankingHeader" align="center" nowrap="nowrap"><?php echo $lang['vote_curchar']; ?></td> 
            <td class="rankingHeader" align="center" nowrap="nowrap"><?php echo $lang['vote_points']; ?></td> 
        </tr>

        <tr>
            <td class="serverStatus1" align="center" nowrap="nowrap"><?php echo $user['username']; ?></td>
            <td class="serverStatus1" align="center" nowrap="nowrap"><?php echo $user['character_name']; ?></td>
            <td class="serverStatus1" align="left" nowrap="nowrap"><?php echo $lang['vote_balance'] ?> <?php echo $_SESSION["points"]; ?><br /><?php echo $lang['vote_apt'] ?> <?php echo $_SESSION["date_points"]; ?> (limit <?php echo $max_acc_points_per_day; ?>)</td>
        </tr>
          <td colspan="3" class="serverStatus1" align="center" nowrap="nowrap"><br /><?php  if(!$_SESSION["time"])
	echo $lang["not_voted_yet"],"<br />";
else
	echo $lang["last_vote"],": ",sec_to_dhms(time() - $_SESSION["time"]),"<br />";
?>&nbsp;</td>
                <tr>
            <td colspan="3" align="left"><br><b><center><u><?php echo $lang['vote_keep'] ?></u></center></b>
                <ul>
                    <font color=green><b><li><?php echo $lang['vote_change'] ?></li>
			  
              <li><?php echo $lang['vote_submit_reward'] ?></li>
                    <li><?php echo $lang['reward_instant'] ?><br><br></b></font>

                    </li>
                    <li><span style="color: blue; font-weight: bold;"><?php echo $lang['vote_reward'] ?></span>
                    </li><li><span style="color: red; font-weight: bold;"><?php echo $lang['vote_hack'] ?></span><br><br>
                    </li></ul>
            </td>
        </tr>
        
    
    </table>
        </td>

        <td style="background: transparent url(templates/WotLK/images/metalborder-right.gif) repeat scroll 0% 0%; -moz-background-clip: border; -moz-background-origin: padding; -moz-background-inline-policy: continuous;"></td>
    </tr>

    <tr>
        <td><img src="templates/WotLK/images/metalborder-bot-left.gif" alt="" width="12" height="11"></td>
        <td style="background: transparent url(templates/WotLK/images/metalborder-bot.gif) repeat scroll 0% 0%; -moz-background-clip: border; -moz-background-origin: padding; -moz-background-inline-policy: continuous;"></td>
        <td><img src="templates/WotLK/images/metalborder-bot-right.gif" alt="" width="12" height="11"></td>

    </tr>
    </tbody>

</table><br>

<br />
<center><?php
if($_SESSION["vote"] == 1)
{
	if($_SESSION["sites"])
		echo $lang["sites_reset_after"],": ",sec_to_dhms($ip_voting_period - (time() - $_SESSION["time"])),"<br />";
	if($_SESSION["date_points"] >= $max_acc_points_per_day)
		echo $lang["vote_limit_reached"],"<br />",$lang["vote_tomorrow"]."<br />";
	echo "<br />";
	show_sites();
}
if($_SESSION["reward"] == 1)
{
?>
<br />
<br />
<?php
	if(isset($_SESSION["char_name"]))
	{
		echo $lang["vote_curchar"],": <font color=red><b>",$_SESSION["char_name"],"</b></font><br />",$reward_message,"<br />";
		show_rewards();
	}else{ echo "<br /><font color='red' size=4><b>Vous devez s&eacute;lectionner un personnage pour voir la boutique !</b></font>";
	}
}
?></center>
<br />
<?php echo $rname ?>

<?php
}
?>

<?php builddiv_end() ?>
