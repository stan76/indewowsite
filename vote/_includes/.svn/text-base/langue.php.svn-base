<?php
if(isset($_POST["setlang"]) && isset($langs[$_POST["setlang"]]))
	$set_lang = $_POST["setlang"];
else if(isset($_COOKIE["lang"]) && isset($langs[$_COOKIE["lang"]]))
	$set_lang = $_COOKIE["lang"];
else
	$set_lang = $default_language;

setcookie("lang", $set_lang, $cookie_expire);
$langfile = "_includes/_langues/".$set_lang.".php";

if(file_exists($langfile))
	require $langfile;
?>