<?php
// =======================================
// Installateur MangosWeb v1.0
// =======================================

// Protection du fichier install
if (file_exists("DISABLE_INSTALLER.php")) die("Installation désactivée. Pour l'activé, veuillez déplacer le fichier DISABLE_INSTALLER.php du dossier install !");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="_images/favicon.ico" type="image/x-icon"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Installation Mangosweb</title>
<link rel="stylesheet" type="text/css" href="_css/common.css"/>
<link rel="stylesheet" type="text/css" href="_css/master.css"/>

<script type="text/javascript" src="_js/jquery.js"></script>
<script type="text/javascript" src="_js/core.js"></script>
</head>

<body>
<!-- Titre des étapes -->
<div class="conttop">
<div class="input"><b>
<?php
if (!isset($_GET['s']) or $_GET['s'] == 1) {echo "Installation Mangosweb: &Eacute;tape 1/3";} // Etape 1
elseif ($_GET['s'] == 2) {echo "Installation Mangosweb: &Eacute;tape 2/3";} // Etape 2
elseif ($_GET['s'] == 3) {echo "Installation Mangosweb: &Eacute;tape 3/3";} // Etape 3
?>
</b></div></div>
<a class="ui-button button1 " href="../index.php"><span><span>Retour au site</span></span></a>
<!-- Titre des étapes fin -->

<div id="wrapper">
<h1 id="logo"><a href="../install/">Installation MangosWeb</a></h1>
<div id="left">
<?php
// Etape 1
if (!isset($_GET['s']) or $_GET['s'] == 1) { ?>
    <form action="index.php?s=2" method="post">
	<h2>Identifiants MySQL:</h2>

	    <p><label class="label">Host MySQL</label>
		<input class="input" type='text' name='db_host' value='<?php echo "127.0.0.1"; ?>'></p>
			
		<p><label class="label">Port MySQL</label>
        <input class="input" type='text' name='db_port' value='<?php echo "3306"; ?>'></p>
			
		<p><label class="label">Type de DB</label>
		<input class="input" type='text' name='db_type' value='<?php echo "mysql"; ?>'></p>

		<p><label class="label">Login MySQL</label>
        <input class="input" type='text' name='db_username' value='<?php echo "root"; ?>'></p>

		<p><label class="label">Mot de passe MySQL</label>
        <input class="input" type='password' name='db_password'></p>

    <br />

	<h2>Les bases de donn&eacute;es:</h2>

		<p><label class="label">Realmd</label>
        <input class="input" type='text' name='db_name' value='<?php echo "realmd"; ?>'></p>
		
		<p><label class="label">Mangos</label>
        <input class="input" type='text' name='world_db_name' value='<?php echo "mangos"; ?>'></p>

		<p><label class="label">Characters</label>
        <input class="input" type='text' name='character_db_name' value='<?php echo "characters"; ?>'></p>
	
	<br />
	
    <input class="input" type='submit' value='Terminer'>
    </form>
<?php
}

// Etape 2
elseif ($_GET['s'] == 2) {
// Vérifie si le formulaire est complet
if (!$_POST['db_host'] | !$_POST['db_port'] | !$_POST['db_type'] | !$_POST['db_username'] | !$_POST['db_password'] | !$_POST['db_name'] | !$_POST['world_db_name'] | !$_POST['character_db_name']) {
	die('<font color="red">Erreur</font>: Le forulaire n\'est pas complet veuillez <a href="javascript: history.go(-1)">revenir en arri&egrave;re</a> et corrig&eacute; ce qu\'il manque.');
	}
// Vérification des identifiants MySQL
@mysql_connect($_POST['db_host'].":".$_POST['db_port'], $_POST['db_username'], $_POST['db_password']) or die ('<font color="red">Erreur</font>: Impossible de se connecter au serveur MySQL, une ou plusieurs donn&eacute;es sont fausse. Veuiller <a href="javascript: history.go(-1)">revenir en arri&egrave;re</a> pour corrig&eacute; les fautes.<br /><br /><font color="red">Erreur MySQL</font>: '.mysql_error());
@mysql_select_db($_POST['world_db_name']) or die('<font color="red">Erreur</font>: Impossible de s&eacute;lectionn&eacute; la base de donn&eacute;e mangos. Veuillez <a href="javascript: history.go(-1)">revenir en arri&egrave;re</a> et corrig&eacute; le nom de la base de donn&eacute;e.<br /><br /><font color="red">Erreur MySQL</font>: '.mysql_error());
@mysql_select_db($_POST['character_db_name']) or die('<font color="red">Erreur</font>: Impossible de s&eacute;lectionn&eacute; la base de donn&eacute;e characters. Veuillez <a href="javascript: history.go(-1)">revenir en arri&egrave;re</a> et corrig&eacute; le nom de la base de donn&eacute;e.<br /><br /><font color="red">Erreur MySQL</font>: '.mysql_error());
@mysql_select_db($_POST['db_name']) or die('<font color="red">Erreur</font>: Impossible de s&eacute;lectionn&eacute; la base de donn&eacute;e realmd. Veuillez <a href="javascript: history.go(-1)">revenir en arri&egrave;re</a> et corrig&eacute; le nom de la base de donn&eacute;e.<br /><br /><font color="red">Erreur MySQL</font>: '.mysql_error());
// Vérifie si la table des comptes éxiste
@mysql_query("SELECT * FROM `account` LIMIT 1") or die('<font color="red">Erreur</font>: La table des comptes est introuvable. V&eacute;rifier si tout est bien install&eacute; !<br /><br /><font color="red">Erreur MySQL</font>: '.mysql_error());
// Lien du fichier config-protected.php
		$conffile = "../config/config_protected.php";
        $build = '';
        $build .= "<?php\n";
        $build .= "\$realmd = array(\n";
        $build .= "'db_type'         => '".$_POST['db_type']."',\n";
        $build .= "'db_host'         => '".$_POST['db_host']."',\n";
        $build .= "'db_port'         => '".$_POST['db_port']."',\n";
        $build .= "'db_username'     => '".$_POST['db_username']."',\n";
        $build .= "'db_password'     => '".$_POST['db_password']."',\n";
        $build .= "'db_name'         => '".$_POST['db_name']."',\n";
        $build .= "'db_encoding'     => 'utf8',\n";
        $build .= ");\n";
		$build .= "?>";
		
		if (is_writeable($conffile)){
                $openconf = fopen($conffile, 'wb');
                fwrite($openconf, $build);
                fclose($openconf);
				}
		else { die('<font color="red">Erreur</font>: Impossible d\'ouvrir le fichier config-protected.php ! Veuillez v&eacute;rifier que le fichier soit bien accessible.');}
				
	
// Préparation de l'injection SQL
$checker = @mysql_query("SELECT * FROM `account_extend` LIMIT 1");
if (isset($_GET['task'])) {$task=$_GET['task'];} else {$task="none";}
if (!$checker || $task == "force1")
{
// Ouvre le fichier full_install.sql
$sqlopen = @fopen("_sql/full_install.sql", "r");
if ($sqlopen) {
    while (!feof($sqlopen)) {
		$queries[] = fgets($sqlopen);
    }
    fclose($sqlopen);
			}
			else {
			echo "<font color=\"red\">Erreur</font>: Impossible d\'ouvrir le fichier full_install.sql, v&eacute;rifier qu'il soit pr&eacute;sent dans le dossier sql !";
			$errmsg = error_get_last();
			echo "<br /><br /><font color=\"red\">Erreur PHP</font>: ".$errmsg['message'];
			exit();}
foreach ($queries as $key => $aquery) {
		if (trim($aquery) == "" || strpos ($aquery, "--") === 0 || strpos ($aquery, "#") === 0) {unset($queries[$key]);}
		}
unset($key, $aquery);

foreach ($queries as $key => $aquery) {
$aquery = rtrim($aquery);
$compare = rtrim($aquery, ";");
if ($compare != $aquery) {$queries[$key] = $compare . "|br3ak|";}
}
unset($key, $aquery);

$queries = implode($queries);
$queries = explode("|br3ak|", $queries);

// Injection SQL
foreach ($queries as $query) {
mysql_query($query);
}
// Ajout de la colonne dbinfo
$dbinfo = $_POST['db_username'].";".$_POST['db_password'].";".$_POST['db_port'].";".$_POST['db_host'].";".$_POST['world_db_name'].";".$_POST['character_db_name'];
mysql_query("UPDATE `realmlist` SET `dbinfo` = '".$dbinfo."' WHERE `id` = 1 LIMIT 1") or die(mysql_error());
}
elseif ($task == "force2") {
?>
Injection SQL termin&eacute; !<br />Veuillez remplire le formulaire d'inscription ci-dessous:
<br /><br />
<form action="index.php?s=3" method="post">

		<p><label class="label">Nom de compte</label>
		<input class="input" type='text' name='account'></p>

		<p><label class="label">Mot de passe</label>
		<input class="input" type='password' name='passw'></p>

		<p><label class="label">Confirm&eacute; le mot de passe</label>
		<input class="input" type='password' name='passw2'></td>

	<?php
	foreach ($_POST as $field=>$value) {
	echo "<input class=\"input\" type=\"hidden\" name=\"" . $field . "\" value=\"" . $value . "\" />";
	}
	?>
	<br />
	<br />
	<input class="input" type='submit' value='Terminer'>
</form>
<?php
exit();
}
else {echo "<font color=\"red\">Erreur</font>: Une version ult&eacute;rieur de MangosWeb est d&eacute;j&agrave; existante dans votre base de donn&eacute;e.<br />";
      echo "<font color=\"darkgreen\">Choix possible</font>: <br /><font color=\"orange\">- R&eacute;installation</font>: R&eacute;installe tout le site. <br /><font color=\"orange\">- Injection SQL</font>: Met &agrave; jour la base de donn&eacute;e MangosWeb (<font color=\"red\">Injection SQL non fonctionnel pour le moment, veuillez chosir la r&eacute;installation !</font>).<br /><br />";
	echo "<form action=\"index.php?s=2&task=force1\" method=\"post\">";
	foreach ($_POST as $field=>$value) {
		echo "<input type=\"hidden\" name=\"" . $field . "\" value=\"" . $value . "\" />";
		}
	echo "<input class=\"input\" type='submit' value='R&eacute;installation'></form>";
	echo "<form action=\"index.php?s=2&task=force2\" method=\"post\">";
	foreach ($_POST as $field2=>$value2) {
		echo "<input type=\"hidden\" name=\"" . $field2 . "\" value=\"" . $value2 . "\" />";
		}
	echo "<br /><input class=\"input\" type='submit' value='Injection SQL'></form><br /><br />";
	// This can be added here too, if someone using the installer only to reconfigure MW
	$dbinfo = $_POST['db_username'].";".$_POST['db_password'].";".$_POST['db_port'].";".$_POST['db_host'].";".$_POST['world_db_name'].";".$_POST['character_db_name'];
	mysql_query("UPDATE `realmlist` SET `dbinfo` = '".$dbinfo."' WHERE `id` = 1 LIMIT 1") or die(mysql_error());
	exit();
	}
// Now some text if we actually managed to get here :)
?>
Installation termin&eacute; !<br />Veuillez remplire le formulaire d'inscription ci-dessous:
<br /><br />
<form action="index.php?s=3" method="post">

		<p><label class="label">Nom de compte</label>
		<input class="input" type='text' name='account'></p>

		<p><label class="label">Mot de passe</label>
		<input class="input" type='password' name='passw'></p>

		<p><label class="label">Confirm&eacute; le mot de passe</label>
		<input class="input" type='password' name='passw2'></td>

	<?php
	foreach ($_POST as $field=>$value) {
	echo "<input type=\"hidden\" name=\"" . $field . "\" value=\"" . $value . "\" />";
	}
	?>
	<br /></br>
	<input class="input" type='submit' value='Terminer'>
</form>
<?php
}

//Etape 3
elseif ($_GET['s'] == 3) {
if (!$_POST['account']) {
	die('<font color="red">Erreur</font>: Le formulaire d\'inscription n\'est pas complet. Veuillez <a href="javascript: history.go(-1)">revenir en arri&egrave;re</a> pour corrig&eacute; ce probl&egrave;me.');
	}
//Générateur de mot de passe hash
function sha_password($user,$pass){
    $user = strtoupper($user);
    $pass = strtoupper($pass);
    return SHA1($user.':'.$pass);
}
mysql_connect($_POST['db_host'].":".$_POST['db_port'], $_POST['db_username'], $_POST['db_password']);
mysql_select_db($_POST['db_name']);
// 
$accountid = mysql_query("SELECT `id` FROM `account` WHERE `username` LIKE '".$_POST['account']."'");
$checkacc = mysql_num_rows($accountid);
if ($checkacc == 1) {
// Création du compte dans la table account_extend
$accountid = mysql_fetch_row($accountid);
mysql_query("UPDATE `account_extend` SET `g_id` = '4' WHERE `account_id` = ".$accountid[0]." LIMIT 1 ;");
echo "Compte cr&eacute;er avec succ&egrave;s ! Vous avez maintenant acc&egrave;s au site et toute ses fonctionnalit&eacute;s !";
}
else {
// Vérification du compte
if (!$_POST['passw'] || !$_POST['passw2']) {die('<font color="red">Erreur</font>: Le formulaire d\'inscription n\'est pas complet, veuillez <a href="javascript: history.go(-1)">revenir en arri&egrave;re</a> pour corrig&eacute; ce probl&egrave;me.');}
if ($_POST['passw'] != $_POST['passw2']) {die('<font color="red">Erreur:</font> Le mot de passe ne correspond pas au premier. Veuillez <a href="javascript: history.go(-1)">revenir an arri&egrave;re</a> pour corrig&eacute; ce probl&egrave;me.');}
$password = sha_password($_POST['account'], $_POST['passw']);
mysql_query("INSERT INTO `account` (`username`, `sha_pass_hash`, `gmlevel`) VALUES ('".$_POST['account']."', '$password', '3' );");
$accountid = mysql_query("SELECT `id` FROM `account` WHERE `username` LIKE '".$_POST['account']."'");
$accountid = mysql_fetch_row($accountid);
mysql_query("INSERT INTO `account_extend` (`account_id`, `g_id`) VALUES ('$accountid[0]', '4');");
echo "Compte cr&eacute;er avec succ&egrave;s ! Vous avez maintenant acc&egrave;s au site et toute ses fonctionnalit&eacute;s !";}
}
?>
</div>
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
</body></html>
