<?php
define("Vote", 1);
session_start();
require "../config/config_vote.php";
require "_includes/langue.php";
require "_includes/functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="_images/favicon.ico" type="image/x-icon"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Syst&egrave;me de vote</title>
<link rel="stylesheet" type="text/css" href="_css/common.css"/>
<link rel="stylesheet" type="text/css" href="_css/master.css"/>

<script type="text/javascript" src="_js/jquery.js"></script>
<script type="text/javascript" src="_js/core.js"></script>
</head>
<body>
<div id="content">
<table width="100%" border="0">
<tr>
<?php
if(isset($_POST["logout"]))
{
	session_destroy();
	$_SESSION = array();
}
if(isset($_SESSION["logged_voting"]))
{
?>
<a class="ui-button button1 " href="../index.php"><span><span>Retour au site</span></span></a>
<form method="post" action="index.php"><input type="submit" name="logout" class="input" value="D&eacute;connexion" /></form>
<?php
}
else
{
?>
<?php
}
?>
</tr>
</table>
<?php
if(!isset($_SESSION["logged_voting"]))
	require "login.php";
else
	require "main.php";
?>
</div>

<!-- Menu footer | Copyrigt -->
<span class="clear"><!-- --></span>
<div id="footer">
<div id="footer-sitemap">
<div id="footer-links">
<div class="link-section">

<span class="clear"><!-- --></span>
</div>
<div id="copyright">
&copy;2010 <a href="http://easy-mangos.wowdb.fr/showthread.php?tid=3435">MangosWeb</a>, Inc. Tous droits r&eacute;serv&eacute;s. Travail r&eacute;alis&eacute; par <a href="http://easy-mangos.wowdb.fr/member.php?action=profile&uid=754">Allan</a> pour <a href="http://easy-mangos.wowdb.fr/index.php">Easy-MaNGOS</a>.
</div></div></div></div>
</body>
</html>
