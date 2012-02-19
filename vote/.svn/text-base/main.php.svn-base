<!-- Table informations compte -->
<table cellspacing="1" cellpadding="3" align="center">
<tr>
<td class="input">
<?php
if(!defined("Vote"))
{
	header("Location: index.php");
	exit();
}
initialize_user();
require "_includes/_tabs/".$tabs[$realms[$_SESSION["realm"]][3]][0];
require "_includes/_tabs/".$tabs[$realms[$_SESSION["realm"]][3]][1];
if($max_acc_points_per_day < 0)
	$max_acc_points_per_day = count($tab_sites);
if(isset($_GET["vote"]))
	$_SESSION["panel"] = "vote";
else if(isset($_GET["reward"]))
	$_SESSION["panel"] = "reward";
if($_SESSION["panel"] == "vote")
{
	if(isset($_POST["site"]))
		vote((int) $_POST["site"]);
}
else if($_SESSION["panel"] == "reward")
{
	$reward_message = "";
	if(isset($_POST["reward"]))
	{
		if($connection_type)
			$reward_message = chose_reward((int) $_POST["reward"]);
		else
			$reward_message = chose_reward_soap((int) $_POST["reward"]);
	}
	else if(isset($_POST["character"]))
		add_char_to_session((int) $_POST["character"]);
}
echo $language["realm"],": ",$_SESSION["realm"],"<br />",
$language["ip"],": ",$_SERVER["REMOTE_ADDR"],"<br />",
$language["cur_acc"],": ",$_SESSION["user_name"],"<br />",
$language["points_1"],": ",$_SESSION["points"],"<br />";
if(!$_SESSION["time"])
	echo $language["not_voted_yet"],"<br />";
else
	echo $language["last_vote"],": ",sec_to_dhms(time() - $_SESSION["time"]),"<br />";
echo $language["voting_period"],": ",$ip_voting_period/(60*60)," ",$language["hours"],"<br />";
?>
</td>
</tr>
</table>
<br />

<!-- Boutons -->
<table border="0" cellspacing="1" cellpadding="3" align="center">
	<tr>
		<td><a class="input" href="?vote"><?php echo $language["show_vote"] ?></a></td>
		<td><a class="input" href="?reward"><?php echo $language["show_reward"] ?></a></td>
	</tr>
</table>
<br />

<!-- Table votes -->
<table cellspacing="1" cellpadding="3" align="center">
<tr>
<th><?php
if($_SESSION["panel"] == "vote")
{
	if($_SESSION["sites"])
		echo $language["sites_reset_after"],": ",sec_to_dhms($ip_voting_period - (time() - $_SESSION["time"])),"<br />";
	if($_SESSION["date_points"] >= $max_acc_points_per_day)
		echo $language["vote_limit_reached"],"<br />",$language["vote_tomorrow"]."<br />";
	echo "<br />";
	show_sites();
}
else if($_SESSION["panel"] == "reward")
{
?>
</th>
</tr>
</table>

<!-- Table sélection de personnage -->
<form action="index.php" method="post">
<table border="0" class="input" cellspacing="1" cellpadding="3" align="center">
	<tr>
		<th colspan="2"><?php echo $language["choose_char_for_reward"] ?></th>
	</tr>
	<tr>
		<td><?php echo $language["available_chars"] ?></td>
		<td>
			<select class="input" name="character" onchange="this.form.submit();">
				<option value="0"></option>
				<?php
				show_chars_menu();
				?>
			</select>
		</td>
	</tr>
</table>
</form>
<br />

<!-- Table liens de vote -->
<table cellspacing="1" cellpadding="3" align="center">
<tr><th><?php
	if(isset($_SESSION["char_name"]))
	{
		echo $language["cur_char"],": ",$_SESSION["char_name"],"<br />",$reward_message,"<br />";
		show_rewards();
	}
}
?>
</th></tr>
</table>