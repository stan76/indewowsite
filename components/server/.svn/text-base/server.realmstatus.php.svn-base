<?php
if(INCLUDED!==true)exit;
// ==================== //
$pathway_info[] = array('title'=>$lang['realms_status'],'link'=>'');
// ==================== //

$items = array();
$items = $DB->select("SELECT * FROM `realmlist` ORDER BY `name`");
$i = 0;
foreach($items as $i => $result)
{
    if((int)$MW->getConfig->generic->use_local_ip_port_test) {
        $result['address'] = "127.0.0.1";
    }
    $dbinfo_mangos = explode(';', $result['dbinfo']);
    if((int)$MW->getConfig->generic->use_archaeic_dbinfo_format) {

        $mangosALL = array(
            'db_type'     => 'mysql',
            'db_host'     => $dbinfo_mangos['0'],
            'db_port'     => $dbinfo_mangos['1'],
            'db_username' => $dbinfo_mangos['2'],
            'db_password' => $dbinfo_mangos['3'],
            'db_name'     => $dbinfo_mangos['4'],
            'db_char'     => $dbinfo_mangos['5'],
            'db_encoding' => 'utf8',
        );
    }
    else {

        $mangosALL = array(
            'db_type'     => 'mysql',
            'db_host'     => $dbinfo_mangos['3'],
            'db_port'     => $dbinfo_mangos['2'],
            'db_username' => $dbinfo_mangos['0'],
            'db_password' => $dbinfo_mangos['1'],
            'db_name'     => $dbinfo_mangos['4'],
            'db_char'     => $dbinfo_mangos['5'],
            'db_encoding' => 'utf8',
        );
    }

    if((int)$MW->getConfig->generic->use_alternate_mangosdb_port) {
        $mangosALL['db_port'] = (int)$MW->getConfig->generic->use_alternate_mangosdb_port;
    }

    $WSDB_EXTRA = DbSimple_Generic::connect("".$mangosALL['db_type']."://".$mangosALL['db_username'].":".$mangosALL['db_password']."@".$mangosALL['db_host'].":".$mangosALL['db_port']."/".$mangosALL['db_name']."");
    if($WSDB_EXTRA)$WSDB_EXTRA->query("SET NAMES ".$mangosALL['db_encoding']);
    $CHDB_EXTRA = DbSimple_Generic::connect("".$mangosALL['db_type']."://".$mangosALL['db_username'].":".$mangosALL['db_password']."@".$mangosALL['db_host'].":".$mangosALL['db_port']."/".$mangosALL['db_char']."");
    if($CHDB_EXTRA)$CHDB_EXTRA->query("SET NAMES ".$mangosALL['db_encoding']);

    $population=0;
    if($res_color==1)$res_color=2;else$res_color=1;
    $realm_type = $realm_type_def[$result['icon']];
    if(check_port_status($result['address'], $result['port'])===true)
    {
        $res_img = './templates/wrath/images/_right/_status/on.png';
        if($WSDB_EXTRA&&$CHDB_EXTRA) {
            $population = $CHDB_EXTRA->selectCell("SELECT count(*) FROM `characters` WHERE online=1");
            $uptime = time () - $DB->selectCell("select starttime FROM uptime ORDER BY starttime DESC LIMIT 1");
        }
    }
    else
    {
        $res_img = './templates/wrath/images/_right/_status/off.png';
        $population_str = 'n/a';
        $uptime = 0;
    }
    $items[$i]['res_color'] = $res_color;
    $items[$i]['img'] = $res_img;
    $items[$i]['name'] = $result['name'];
    $items[$i]['type'] = $realm_type;
    $items[$i]['pop'] = $population;
    $items[$i]['uptime'] = $uptime;
    unset($WSDB_EXTRA);
    unset($CHDB_EXTRA);
}
?>
