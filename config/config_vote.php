<?php
$realms = array(
// Nom du royaume
"MangosWeb" => array(1, 1, 1, 1),
);
$realmd_DB = array(
// Connexion à la base de donnée realmd
1 => array("127.0.0.1:3306", "root", "mangos", "realmd"),
);
$characters_DB = array(
// Connexion à la base de donéne characters
1 => array("127.0.0.1:3306", "root", "mangos", "characters"),
);
// 1=Remote access | 0=SOAP
$connection_type = 1;
$remote_access = array(
// Connexion au Remote access/SOAP
// Accès Remote access/SOAP
1 => array("localhost", "3443", "root", "mangos"),
);
$tabs = array(
// 
1 => array("sites.php", "rewards.php"),
);

// Bouton de retour
$site_link = "../index.php";

// Nom du serveur
$server_name = "MangosWeb";

// 1=Ouvrir dans la même pas | 0=Ouvrir dans une page différente
$open_vote_site = 0;

// Nombre maximum de votes par jour
$max_acc_points_per_day = 12; // Par défaut=12

// Sécurité vote période IP
$ip_voting_period = 60*60*24; // Ne pas changer

// Sites de vote ouvert ou non
$use_online_check = True;	  // True=Oui | Fasle=Non

// Si vous utiliser une révision inférieur à 8886 alors changer la valeur par 1 sinon laisser 0
$mangos_rev = 0;

// Configuration des langues
$langs = array(
"french" => array("Français", "fr", 0),
);

// Langage par défaut
$default_language = "french";

// Ne pas changer
$cookie_expire = time()+60*60*24;
?>