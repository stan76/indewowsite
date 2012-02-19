<?php
if(!defined("Vote"))
{
	header("Location: index.php");
	exit();
}
?>
<script type="text/javascript">
function validate_required(field, alerttxt)
{
	if (field.value==null || field.value=="")
		{alert(alerttxt);return false;}
return true;
}
function validate_form(thisform)
{
	with (thisform)
	{
		if (validate_required(username, "<?php echo $language["not_entered_username"] ?>")==false)
			{username.focus();return false;}
		if (validate_required(password, "<?php echo $language["not_entered_password"] ?>")==false)
			{password.focus();return false;}
	}
}
</script>
<?php
if(isset($_POST["submit"]))
{
	$_SESSION["realm"] = urldecode($_POST["realm"]);
	$user_name = stripslashes($_POST["username"]);
	$user_pass = sha1(strtoupper($user_name.":".stripslashes($_POST["password"])));
	switchConnection("realmd", $_SESSION["realm"]);
	$results = execute_query("SELECT `id`, `username` FROM `account` WHERE `username` = '".mysql_real_escape_string($user_name)."' AND `sha_pass_hash` = '".$user_pass."' LIMIT 1");
	if($row = mysql_fetch_assoc($results))
	{
		$_SESSION["user_id"] = $row["id"];
		$_SESSION["user_name"] = $row["username"];
		$_SESSION["logged_voting"] = 1;
		$_SESSION["panel"] = "index";
		echo "<script type=\"text/javascript\">setTimeout(window.open('index.php', '_self'),0);</script>";
		exit();
	}
	else
		$wrong = 1;
}
if(isset($wrong))
{
?>
<font color="red"><?php echo $language["wrong"] ?></font>
<?php
}
?>

<a class="ui-button button1 " href="../index.php"><span><span>Retour au site</span></span></a>

<!-- Menu de gauche | Connexion -->
<div id="wrapper">
<h1 id="logo"><a href="../vote/">Syst&egrave;me de vote</a></h1>
<div id="content" class="login">
<div id="left">
<h2>Se connecter</h2>
<form method="post" id="form" action="index.php" onsubmit="return validate_form(this)">
<p><label class="label">Nom de compte</label>
<input name="username" maxlength="320" type="text" class="input" /></p>
<p><label for="password" class="label">Mot de passe</label>
<input name="password" maxlength="16" type="password" autocomplete="off" class="input"/></p>
<p><label class="label">Royaume</label>
			<select name="realm" class="input">
<?php
foreach($realms as $key => $data)
	echo "<option value=\"",urlencode($key),"\">",$key,"</option>";
?>
			</select></p>
<br />
<p><input class="input" type="submit" alt="Traitement en cours…" name="submit" value="Se connecter" /></p>
</form>

<!-- Liens d'aide -->
<ul id="help-links">
<li class="icon-pass">
Vous avez oubli&eacute; le <a href="../index.php?n=account&sub=restore">mot de passe</a> de votre compte ?
</li>
<li class="icon-signup">
Vous n'avez pas encore de compte ? <a href="../index.php?n=account&sub=register">Cr&eacute;ez-le maintenant</a>!
</li>
<li class="icon-secure">
Apprenez &agrave; <a href="../index.php?n=account&sub=login">g&eacute;rer votre compte</a> !
</li></ul>
</div>

<!-- Menu droite | Création de compte -->
<div id="right">
<h2>Besoin d'un compte ?</h2>
<h3>Cr&eacute;er un compte rapidement et facilement !</h3>
<a
class="ui-button button1 "
href="../index.php?n=account&sub=register"
>
<span>
<span>Cr&eacute;er un compte</span>
</span>
</a>
</div></div></div>






