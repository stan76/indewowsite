<?php
class Mangos{
    public $zoneByID;
    public $characterInfoByID;
    public $charDataField;

    public function Mangos(){
        $this->construct_zoneByID();
        $this->construct_characterinfo();
        $this->construct_charDataField();

    }


    public function construct_charDataField(){
        include('./core/cache/mangos_scripts/UpdateFields.php');
        $this->charDataField = $mangos_field;
        unset($mangos_field);
    }
	
public function construct_zoneByID(){
        $this->zoneByID = array(
            36 => 'Montagnes d\'Alterac',
            2597 => 'Vall&eacute;e d\'Alterac',
            3358 => 'Bassin d\'Arathi',
            45 => 'Hautes terres d\'Arathi',
            331 => 'Orneval',
            3790 => 'Auchindoun: Cryptes Auchenaï',
            3792 => 'Auchindoun: Tombes de Mana',
            3791 => 'Auchindoun: Les salles des Sethekk',
            3789 => 'Auchindoun: Labyrinthe de l\'Ombre',
            4494 => 'Azjol-Nerub: Ahn\'kahet: L\'Ancien Royaume',
            3477 => 'Azjol-Nerub: Azjol-Nerub',
            16 => 'Azshara',
            3524 => '&icirc;le de Brume-azur',
            3 => 'Terres ingrates',
            3959 => 'Temple Noir',
            719 => 'Profondeurs de Brassenoire',
            1584 => 'Profondeurs de Rochenoire',
            25 => 'Montagnes de Rochenoire',
            1583 => 'C&icirc;me de Rochenoire',
            2677 => 'Repaire de l\'Aile noire',
            3522 => 'Les Tranchantes',
            4 => 'Terres foudroy&eacute;es',
            3525 => '&icirc;le de Brumesang',
            3537 => 'Toundra Bor&eacute;enne',
            46 => 'Steppes Ardentes',
            3606 => 'Cavernes du temps: Sommet de Hyjal',
            2367 => 'Cavernes du temps: Contreforts de Hautebrande d\'antan',
            2366 => 'Cavernes du temps: Le Marais noir',
            4100 => 'Cavernes du temps: L\'&eacute;puration de Stratholme',
            3607 => 'R&eacute;servoir de Glissecroc: Caverne du sanctuaire du serpent',
            3717 => 'R&eacute;servoir de Glissecroc: L\'Enclos aux esclaves',
            3715 => 'R&eacute;servoir de Glissecroc: Caveau de la vapeur',
            3716 => 'R&eacute;servoir de Glissecroc: Basse-tourbi&egrave;re',
            2817 => 'For&ecirc;t du Chant de Crystal',
            4395 => 'Dalaran',
            4378 => 'Egouts de Dalaran',
            148 => 'Sombrivage',
            1657 => 'Darnassus',
            41 => 'D&eacute;fil&eacute; de Deuillevent',
            2257 => 'Tram des profondeurs',
            405 => 'D&eacute;solace',
            2557 => 'Haches-tripes',
            65 => 'D&eacute;solation des dragons',
            4196 => 'Donjon de Drak\'Tharon',
            1 => 'Dun Morogh',
            14 => 'Durotar',
            10 => 'Bois de la p&eacute;nombre',
            15 => 'Mar&eacute;cage d\'&acirc;prefange',
            139 => 'Maleterres de l\'est',
            12 => 'For&ecirc;t d\'Elwynn',
            3430 => 'Bois des Chants &eacute;ternels',
            3820 => 'Oeil du Cyclone',
            361 => 'Gangrebois',
            357 => 'F&eacute;ralas',
            3433 => 'Terres Fantômes',
            133 => 'Gnomeregan',
            394 => 'Les Grisonnes',
            3618 => 'Repaire de Gruul',
            4375 => 'Gundrak',
            3562 => 'Citadelle des Flammes infernales : Remparts des Flammes infernales',
            3836 => 'Citadelle des Flammes infernales : Le repaire de Magtheridon',
            3713 => 'Citadelle des Flammes infernales : La Fournaise du sang',
            3714 => 'Citadelle des Flammes infernales : Les Salles bris&eacute;es',
            3483 => 'P&eacute;ninsule des Flammes infernales',
            267 => 'Contreforts de Hautebrande',
            495 => 'Fjord Hurlant',
            210 => 'Couronne de glace',
            1537 => 'Forgefer',
            4080 => '&icirc;le de Quel Danas ',
            2562 => 'Karazhan',
            38 => 'Loch Modan',
            4095 => 'Terrasse des Magist&egrave;res',
            2100 => 'Maraudon',
            2717 => 'Cœur du Magma',
            493 => 'Reflet de Lune',
            215 => 'Mulgore',
            3518 => 'Nagrand',
            3456 => 'Naxxramas',
            3523 => 'Raz-de-N&eacute;ant',
            2159 => 'Repaire d\'Onyxia',
            1637 => 'Orgrimmar',
            2437 => 'Gouffre de Ragefeu',
            722 => 'Souilles de Tranchebauge',
            491 => 'Kraal de Tranchebauge',
            44 => 'Les Carmines',
            3429 => 'Ruines de Ahn`Qiraj',
            3968 => 'Ruines de Lordaeron (Fossoyeuse)',
            796 => 'Monast&egrave;re &eacute;carlate',
            2057 => 'Scholomance',
            51 => 'Gorge des Vents br&ucirc;lants',
            209 => 'Donjon d\'Ombrecroc',
            3520 => 'Vall&eacute;e d\'Ombrelune',
            3703 => 'Cit&eacute; de Shattrath',
            3711 => 'Bassin de Sholazar',
            1377 => 'Silithus',
            3487 => 'Cit&eacute; de Lune d\'Argent',
            130 => 'For&ecirc;t des Pins argent&eacute;s',
            406 => 'Les Serres-Rocheuses',
            1519 => 'Cit&eacute; de Hurlevent',
            4384 => 'Rivage des Anciens',
            33 => 'Vall&eacute;e de Strangleronce',
            2017 => 'Stratholme',
            1417 => 'Temple englouti',
            4075 => 'Plateau du Puits de soleil',
            8 => 'Marais des Chagrins',
            440 => 'Tanaris',
            141 => 'Teldrassil',
            3846 => 'Donjon de la Temp&ecirc;te: L\'Arcatraz',
            3847 => 'Donjon de la Temp&ecirc;te: La Botanica',
            3842 => 'Donjon de la Temp&ecirc;te: l\'Oeil',
            3849 => 'Donjon de la Temp&ecirc;te: Le M&eacute;chanar',
            3428 => 'Temple de Ahn\'Qiraj',
            3519 => 'For&ecirc;t de Terokkar',
            17 => 'Les Tarrides',
            3702 => 'Le Cercle de Sang (Ar&egrave;ne des Tranchantes)',
            1581 => 'Les Mortemines',
            3557 => 'L\'Exodar',
            47 => 'Les Hinterlands',
            4500 => 'Le Nexus: L\'œil de l\'&eacute;ternit&eacute;',
            4120 => 'Le Nexus: Le Nexus',
            4228 => 'Le Nexus: L\'Oculus',
            4493 => 'Le sanctum Obsidien',
            3698 => 'Ar&egrave;ne de Nagrand (Nagrand)',
            4406 => 'Ar&egrave;ne des valeureux (Orgrimmar)',
            4298 => 'L\'Enclave &eacute;carlate',
            717 => 'La Prison',
            67 => 'Les Pics Foudroy&eacute;s',
            457 => 'La Mer Voil&eacute;e',
            4415 => 'Le Fort Pourpre',
            400 => 'Mille pointes',
            1638 => 'Pitons du Tonnerre',
            85 => 'Clairi&egrave;re de Tirisfal',
            1337 => 'Uldaman',
            4272 => 'Ulduar: Salles de Foudre',
            4264 => 'Ulduar: Salles de Pierre',
            490 => 'Crat&egrave;re d\'un Goro',
            1497 => 'Fossoyeuse',
            206 => 'Donjon d\'Utgarde: Donjon d\'Utgarde',
            1196 => 'Donjon d\'Utgarde: Cime d\'Utgarde',
            4603 => 'Caveau d\'Archavon',
            718 => 'Cavernes des lamentations',
            3277 => 'Goulet des Chanteguerres',
            28 => 'Maleterres de l\'ouest',
            40 => 'Marche de l\'Ouest',
            11 => 'Les Paluns',
            4197 => 'Joug-d\'hiver',
            618 => 'Berceau-de-l\'Hiver',
            3521 => 'Mar&eacute;cage de Zangar',
            3805 => 'Zul`Aman',
            66 => 'Zul`Drak',
            978 => 'Zul`Farrak',
            19 => 'Zul`Gurub',
);
}

    public function construct_characterinfo(){
        global $lang;
        $this->characterInfoByID = array(
            'character_race' => array(
                1 => $lang['Human'],
                2 => $lang['Orc'],
                3 => $lang['Dwarf'],
                4 => $lang['Nightelf'],
                5 => $lang['Undead'],
                6 => $lang['Tauren'],
                7 => $lang['Gnome'],
                8 => $lang['Troll'],
                9 => $lang['Goblin'],
                10 => $lang['Bloodelf'],
                11 => $lang['Dranei'],
            ),
            'character_class' => array(
                1 => $lang['Warrior'],
                2 => $lang['Paladin'],
                3 => $lang['Hunter'],
                4 => $lang['Rogue'],
                5 => $lang['Priest'],
				6 => $lang['Death_Knight'],
                7 => $lang['Shaman'],
                8 => $lang['Mage'],
                9 => $lang['Warlock'],
                11 => $lang['Druid'],
            ),

            'character_gender' => array(
                0 => $lang['male'],
                1 => $lang['female'],
                2 => 'None',
            ),
            'character_rank' => array(
                'alliance' => array(
                    1 => $lang['ar1'],
                    2 => $lang['ar2'],
                    3 => $lang['ar3'],
                    4 => $lang['ar4'],
                    5 => $lang['ar5'],
                    6 => $lang['ar6'],
                    7 => $lang['ar7'],
                    8 => $lang['ar8'],
                    9 => $lang['ar9'],
                    10 => $lang['ar10'],
                    11 => $lang['ar11'],
                    12 => $lang['ar12'],
                    13 => $lang['ar13'],
                    14 => $lang['ar14']
                ),
                'horde' => array(
                    1 => $lang['hr1'],
                    2 => $lang['hr2'],
                    3 => $lang['hr3'],
                    4 => $lang['hr4'],
                    5 => $lang['hr5'],
                    6 => $lang['hr6'],
                    7 => $lang['hr7'],
                    8 => $lang['hr8'],
                    9 => $lang['hr9'],
                    10 => $lang['hr10'],
                    11 => $lang['hr11'],
                    12 => $lang['hr12'],
                    13 => $lang['hr13'],
                    14 => $lang['hr14']
                )
            )
        );
    }

    public function get_zone_name($zoneid){
        if (isset($this->zoneByID[$zoneid])){
            $zonename=$this->zoneByID[$zoneid];
        }else{
            $zonename='Zone inconnue';
        }
        return $zonename;
    }

    /* Function: Mail item to player with donation ID and who to deliver item too
     * Vars: $donate_item_id = ID defined in realmd.donation_template
     *       $character_item_id = Character ID from world.character that the item is beeing sent too.
     *       $txnid = The ID of the donation.
     *       $admin_send = If admin is true paypal is not involved and you can use this as a send function.
     */
    public function mail_item_donation($donate_item_id, $character_item_id, $txnid=false,$admin_send = false){
        global $WSDB;
        global $DB;
        global $CHDB;

        #Constants
        $error_output = 0; // Inizializer for error outputing
        $donateid = $donate_item_id; // The donation ID in table donation_template
        $guid = $character_item_id; // The character that is getting the item(s)
        $offset_mail_guid = 30000; // Offset guid to start at. This is recommanded to be as high! Also to high may cause problems , around 10000 to 40000 is nice. It really depends on your server if it has like 1000 users on all the time its recommanded to have it to 500000. Notice, to high will cause mangos server to crash.
        $donation_template = $DB->selectRow("SELECT * FROM `donations_template` WHERE id='".$donateid."'");
        $ROUNDS = 0; // Rounds is to check how many times loop goes. NOT CHANGE THIS!
        $items = explode(",", $donation_template['items']);

        // Generate item's from item-sets if find any item sets of course. :)
        $items_itemset = explode(",", $donation_template['itemset']);
        if ($items_itemset[0] != ''){
            foreach($items_itemset as $itemset_id){
                $qray = $WSDB->select("SELECT entry FROM `item_template` WHERE itemset='".$itemset_id."'");
                foreach($qray as $d){
                    $items[] = $d['entry'];
                }
            }
        }
        foreach($items as $self => $item){
            if ($item == '' || !is_numeric($item)){
                unset($items[$self]);
            }
        }

        foreach ($items as $item_id){


            $data = $WSDB->selectRow("SELECT * FROM `item_template` WHERE entry='".$item_id."'");

            // We need to get a unquie guid for char_inv. Problem is that mangos is caching and not updated on sql.
            // Therefor we need to create a offset guid.


            $ROUNDS++;
            // If this is the first loop we must check if we MUST increment with offset or if we can just apply id +1
            $new_guid = $this->mangos_newguid('item_instance');
            $item = $new_guid['new_guid'];
            $WE_DID_OFFSET_ID = $new_guid['incr'];



            ## array FOR ITEM_INSTANCE, THERE ARE $this->charDataField['ITEM_END'] Fields if not a bag.
            ## IF BAG its $this->charDataField['CONTAINER_END'] fields.
            $item_instance_value = array();
            for($i=0;$i<$this->charDataField['ITEM_END'];$i++)$item_instance_value[$i]=0;



            ## Defines
            $item_instance_value[$this->charDataField['OBJECT_FIELD_GUID']] = $item;    //Guid
            $item_instance_value[$this->charDataField['OBJECT_FIELD_TYPE']] = 1073741936;  //defaultvalue
            $item_instance_value[$this->charDataField['OBJECT_FIELD_ENTRY']] = $data['entry'];//entry
            $item_instance_value[$this->charDataField['OBJECT_FIELD_SCALE_X']] = 1065353216; //defaultvalue
            $item_instance_value[$this->charDataField['ITEM_FIELD_OWNER']] = 1;  //owner_guid
            $item_instance_value[$this->charDataField['ITEM_FIELD_STACK_COUNT']] = 1; // Stacks. Amount
            $item_instance_value[$this->charDataField['ITEM_FIELD_FLAGS']] = $data['Flags']; //Flags
            $item_instance_value[$this->charDataField['ITEM_FIELD_DURABILITY']] = $data['MaxDurability']; // Min Durability
            $item_instance_value[$this->charDataField['ITEM_FIELD_MAXDURABILITY']] = $data['MaxDurability'] ; // Max Durability

            if ($data['InventoryType'] == 18){  // If this is A Bag.
               // X fields to Bag slot.
                for($i=$this->charDataField['ITEM_END'];$i<$this->charDataField['CONTAINER_END'];$i++)$item_instance_value[$i]=0;
                $item_instance_value[$this->charDataField['OBJECT_FIELD_TYPE']]= "7";
                $item_instance_value[$this->charDataField['CONTAINER_FIELD_NUM_SLOTS']]= $data['ContainerSlots'];   // Slots on bag
                $item_instance_value[$this->charDataField['CONTAINER_ALIGN_PAD']]= "0";  // CONTAINER_ALIGN_PAD

            }else{ $item_instance_value[$this->charDataField['OBJECT_FIELD_TYPE']] = 3;}
            if ($data['spellid_1'] != 0){ $item_instance_value['16'] = 4294967295; }else{ $item_instance_value['16'] = 0; }


            ## // ## Main operation ## \\ ##
				
            $additem_code = implode($item_instance_value, ' ');
            $data_field = $additem_code;
				
			// Here we count how many of the current item the user has
			$count_insert1 = $CHDB->select("SELECT data FROM `item_instance` WHERE guid='$item' AND owner_guid='$guid'");
			$count1 = count($count_insert1);
			$insert1 = $CHDB->query("INSERT INTO `item_instance` (guid, owner_guid, data) VALUES('".$item."', '".$guid."', '".$data_field."')");
				
			// Lets check to see if our query was successful
			$check_insert1 = $CHDB->select("SELECT data FROM `item_instance` WHERE guid='$item' AND owner_guid='$guid'");
			$check_finalcount = count($check_insert1);
				
			// If the user has more of the item he selected, then when we started, then success!
            if ($check_finalcount > $count1){

                $new_guid = $this->mangos_newguid('mail');
                $mail_id = $new_guid['new_guid'];
                $WE_DID_OFFSET_ID = $new_guid['incr'];

				// case active. We need to add slash if its Some other in db who has ' "
				## Constants
				$insertitem = str_replace("'","\'", $data['name']);
				$timestampplus_start = date('YmdHis', time());
				$startitemnow_unix = strtotime($timestampplus_start);
					
				// Here we create the mail message for the item, and check to see if the query was successfull. If the mail message exists, then we move on
				$insert2 = $CHDB->query("INSERT INTO mail (id, messageType, stationery, sender, receiver, subject, body, has_items, expire_time, deliver_time, money, cod, checked)
                    VALUES('".$mail_id."','0','41','1','".$guid."','".$insertitem."','Thank you for your donation!','1','32495688732','".$startitemnow_unix."','0','0','0')");
				$check_insert2 = $CHDB->select("SELECT id FROM mail WHERE id='$mail_id' AND receiver='$guid'");
				if (count($check_insert2) > 0){
				
					// Lets check to see if the placing of the item, in the mail message was successfull
					$insert3 = $CHDB->query("INSERT INTO mail_items (mail_id, item_guid, item_template, receiver) VALUES ('".$mail_id."','".$item."','".$data['entry']."','".$guid."')");
					$check_insert3 = $CHDB->select("SELECT mail_id FROM mail_items WHERE mail_id='$mail_id' AND receiver='$guid'");
					if (count($check_insert3) > 0){
					echo "<font color='blue'><br />Success!&nbsp</font>";
					}else{ $error_output++; echo "<br /><font color='red'>MySQL Error: Problem inserting item into mail.</font><br />"; }
				}else{ $error_output++; echo "<br /><font color='red'>MySQL Error: Problem creating mail message.</font><br />"; }
			}else{ $error_output++; echo "<br /><font color='red'>MySQL Error: Problem inserting data into \"Item Instance\" table.</font><br />"; }

        }
		// Return true if all query's where successful. Else return false
        if ($error_output == 0){
            if ($admin_send == true){
                return TRUE;
            }else{
                return TRUE;
            }
        }else{
        return FALSE;
      }
    }



    /*   Function used to increase guids to any database in mangos. ( Must be in switch beneath and in database world_entrys ).
     *   Return type array,
     *   Return values, [New_guid], [(bool) If we did increment or not]
     *   $database defined in World database and table world_entrys in REALM database
     */
    public function mangos_newguid($database){
        global $WSDB,$DB, $CHDB;
        // We check here for processtimes and checks with mangos.
        $highest_mangostime = $DB->selectCell("SELECT `starttime` FROM `uptime` ORDER BY starttime DESC LIMIT 0,1");

        // We store timestamps and incre info in database.
        $last_increment = $DB->selectCell("SELECT last_inc FROM `world_entrys` WHERE db_name='".$database."'");

        // We find the max guid of the wanted table.
        // Maybe some tables have other name of "guid" example: "id". Also define the Id we want to increase with.
        switch($database){
            case 'character':
                $last_id_cell_maxguid = $CHDB->selectCell("SELECT MAX(guid) FROM `".$database."s`");
                $offset_incre_guid = 0;
            break;
            case 'item_instance':
                $last_id_cell_maxguid = $CHDB->selectCell("SELECT MAX(guid) FROM `".$database."`");
                $offset_incre_guid = 20000;
            break;
            case 'mail':
                $last_id_cell_maxguid = $CHDB->selectCell("SELECT MAX(id) FROM `".$database."`");
                $offset_incre_guid = 5000;
            break;
        }
        // Die if we didnt find the databases properties.
        if ($last_id_cell_maxguid == '' && $offset_incre_guid == ''){
            die("Database you tried to Increase ID is not in switch in common.php also proberly not in database relamd.world_entrys");
        }

        // Now we need to find out Whenever we want to create new High ids or not.
        // If mangos START stamp is higher then lastest transfer we must increase ID with offset. Else we can just go on.
        if ($last_increment < $highest_mangostime || $last_increment == ''){
            $DB->query("UPDATE `world_entrys` SET last_inc='".time()."',last_id='".$last_id_cell_maxguid."' WHERE db_name='".$database."'");
            $last_id_cell = $last_id_cell_maxguid + $offset_incre_guid+1;
            $WE_DID_OFFSET_ID = TRUE;
        }else{
            $last_id_cell = $last_id_cell_maxguid+1;
            $WE_DID_OFFSET_ID = FALSE;
        }
        $array = array(
            'new_guid' => $last_id_cell,
            'incr' => $WE_DID_OFFSET_ID,
        );
        return $array;

    }

}

?>
