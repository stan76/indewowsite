<?php
/* Config.php */
$dbms = 'mysql';
$dbhost = 'localhost';    // Host MySQL
$dbport = '3306';		  // Port MySQL
$dbname = 'realmd';		  // Base de donnée realmd
$dbuser = 'root';		  // Login MySQL
$dbpasswd = 'mangos';	  // Mot de passe MySQL
$table_prefix = 'forum_'; // Préfix des tables du forum
$acm_type = 'file';		  // Ne pas changer
$load_extensions = '';

@define('PHPBB_INSTALLED', true);
?>