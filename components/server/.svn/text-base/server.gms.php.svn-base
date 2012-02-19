<?php
if(INCLUDED!==true)exit;

$pathway_info[] = array('title'=>'Assistance en jeu','link'=>'');

$gmlevel_w = array('Membres','Mod&eacute;rateurs','Ma&icirc;tres du jeu','Administrateurs');

$result = $DB->select("
    SELECT username, gmlevel 
    FROM account 
    WHERE gmlevel>0
    ORDER BY gmlevel,username 
");
$gm_groups = array();
foreach($result as $r){
    $gm_groups[$r['gmlevel']][] = $r['username'];
}
$gm_groups = array_reverse($gm_groups,true);
unset($result);
?>