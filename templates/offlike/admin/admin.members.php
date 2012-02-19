<br>
<?php builddiv_start(1, $lang['si_acc']) ?>
<?php if(isset($_GET['id']) && $_GET['id']>0 && $profile){ ?>
<style type="text/css">
</style>

    <table align="center" width="100%" style="font-size:0.8em;"><tr><td align="center">
        <div style="border: 0px dotted #1E4378;background:none;margin:4px;padding:6px 9px 6px 9px;text-align:left;width:70%;">
<?php write_metalborder_header(); ?>
            <a href="index.php?n=admin&sub=members&id=<?php echo$_GET['id'];?>&action=dodeleteacc" onclick="return confirm('Etes-vous s&ucirc;re ?');"><b>[ <font color="red">Supprimer le compte</font> ]</b></a>
			<br /><br />
            <b>Inscrit le:</b> <?php echo$profile['joindate'];?>
			<br /><br />
            <b>Adresse IP:</b> <?php echo$profile['registration_ip'];?>
			<br /><br />
            <b>Derni&egrave;re connexion:</b> <?php echo$profile['last_login'];?><br/>
            <br />
            <?php if($act ==1){ ?>
            <a href="index.php?n=admin&sub=members&id=<?php echo$_GET['id'];?>&action=unban"><b>[<font color="red">Unban</font>]</b></a>
            <?php }elseif($act ==0){ ?>
            <a href="index.php?n=admin&sub=members&id=<?php echo$_GET['id'];?>&action=ban"><b>[<font color="green">Ban</font>]</b></a>
			<?php } ?>
        </div>
<?php write_metalborder_footer(); ?>
<?php write_metalborder_header(); ?>
        <div style="border: 0px dotted #1E4378;background:none;margin:4px;padding:6px 9px 6px 9px;text-align:left;width:70%;">
            <u><b>Personnages du compte: </b></u><?php


            $MANG = new Mangos;
            for($i=0; $i < count($userchars); $i++) {
                echo '<br/>';
                echo '<b>' . '<a class="disinfection_link" href="armory/index.php?searchType=profile&character='.$userchars[$i]['name'].'">' . $userchars[$i]['name'] . ':</a></b> Level ' . $userchars[$i]['level'] . ' <i>' .
                $MANG->characterInfoByID['character_race'][$userchars[$i]['race']] . '</i> ' . $MANG->characterInfoByID['character_class'][$userchars[$i]['class']];
            }
            unset($MANG);
            ?>
        </div>
<?php write_metalborder_footer(); ?>
<?php write_metalborder_header(); ?>
        <form method="post" action="index.php?n=admin&sub=members&id=<?php echo$_GET['id'];?>&action=changepass">
        <div style="border: 0px dotted #1E4378;background:none;margin:4px;padding:6px 9px 6px 9px;text-align:left;width:70%;">
            <b><u>Nouveau mot de passe:</u> <input type="password" size="20" name="new_pass"><input type="submit" value="Changer" class="button" style="font-size:11px;">
        </div>
        </form>
<?php write_metalborder_footer(); ?>
<?php write_metalborder_header(); ?>
        <form method="post" action="index.php?n=admin&sub=members&id=<?php echo$_GET['id'];?>&action=change" enctype="multipart/form-data">
        <div style="border: 0px dotted #1E4378;background:none;margin:4px;padding:6px 9px 6px 9px;text-align:right;width:70%;">
            <div align="left"><b><?php $active=1;if ($act){echo "BAN !";}else{echo "ACTIF" ; }?></span></b>
			  <br /><br />
              <b>Nom d'utilisateur:</b> 
              <input type="text" disabled="disabled" name="profile[username]" size="24" value="<?php echo $profile['username'];?>" style="margin:1px;"> 
              <br /><br />
              <b>E-mail du compte:</b> 
              <input type="text" name="profile[email]" size="24" value="<?php echo $profile['email'];?>" style="margin:1px;"> 
              <br /><br />
              <?php if($user['gmlevel']==3){ ?>
              <b>Niveau du compte:</b> 
              <input type="text" name="profile[gmlevel]" size="1" value="<?php echo $profile['gmlevel'];?>" style="margin:1px;"> 
              <br /><br />
              <?php } ?>
              <b>Extension du compte:</b> 
			  <select name="profile[expansion]">
			  <?php
			  echo '<option value="0"';
			  if ($profile['expansion'] == 0) {echo ' selected="selected"';}
			  echo '>World of Warcraft - Classique</option>';
			  echo '<option value="1"';
			  if ($profile['expansion'] == 1) {echo ' selected="selected"';}
			  echo '>World of Warcraft - BurningCrusade</option>';
			  echo '<option value="2"';
			  if ($profile['expansion'] == 2) {echo ' selected="selected"';}
			  echo '>World of Warcraft - Wrath of the Lich King</option>';
			  echo '<option value="3"';
			  if ($profile['expansion'] == 3) {echo ' selected="selected"';}
			  echo '>World of Warcraft - Alpha Cataclysm</option>';
			  ?>
			  </select>
              <br/>
            </div>
        </div>
        <div style="background:none;margin:4px;padding:6px 9px 0px 9px;text-align:right;width:95%;">
		    <input type="submit" size="16" class="button" style="font-size:12px;" value="Accepter">
            <input type="reset" size="16" class="button" style="font-size:12px;" value="Annuler"> &nbsp; 
        </div>
        </form>
<?php write_metalborder_footer(); ?>
<?php write_metalborder_header(); ?>
        <form method="post" action="index.php?n=admin&sub=members&id=<?php echo$_GET['id'];?>&action=change2" enctype="multipart/form-data">
        <div style="border: 0px dotted #1E4378;background:none;margin:4px;padding:6px 9px 6px 9px;text-align:left;width:70%;">
            <b>Groupe:</b> 
            <select name="profile[g_id]" style="margin:1px;">
                <?php foreach($allgroups as $group_id=>$group_name){ ?>
                <option value="<?php echo$group_id;?>"<?php if($profile['g_id']==$group_id)echo' selected';?>><?php echo$group_name;?></value>
                <?php } ?>
            </select>  <br/>
            <?php if ($user['gmlevel'] > 0){ ?>
            <?php } ?>
        </div>
<?php write_metalborder_footer(); ?>
    </td></tr></table>
<?php }else{ ?>
<?php write_metalborder_header(); ?>
<table border="0" cellspacing="1" cellpadding="4" align="center" width="100%" class="bordercolor" style="font-size:0.8em;">
  <tbody>
    <tr>
      <td colspan="8" class="titlebg">
      <b>T&acirc;ches:</b>

      <br /><a href="index.php?n=admin&sub=members&action=deleteinactive" onclick="return confirm('Are you sure?');"><b>[ <font color="red">Supprimer tous les comptes non activ&eacute;s, depuis plus de <?php echo ($oldInactiveTime/3600/24); ?> jours </font> ]</b></a>
      <br /><br />
      <a href="index.php?n=admin&sub=members&action=deleteinactive_characters" onclick="return confirm('Are you sure that you want to delete all characs. that are old?');"><b>[ <font color="red"> Supprimer tous les personnages non utilis&eacute;s, depuis plus de 90 jours </font> ]</b></a>
      <br /><br /><form action="index.php?n=admin&sub=members" method="POST">Recherche un utilisateur: <input type="text" name="search_member"><input type="submit" value="Chercher"></form>
        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="bordercolor"style="font-size:1em;">
          <tbody><tr>
            <td><?php echo $lang['post_pages'];?>: <?php echo $pages_str; ?></td>
            <td align="right">
              <b>
              <a href="index.php?n=admin&sub=members"><?php echo $lang['all'];?></a> | 
              <a href="index.php?n=admin&sub=members&char=1">#</a> 
              <a href="index.php?n=admin&sub=members&char=a">A</a> 
              <a href="index.php?n=admin&sub=members&char=b">B</a> 
              <a href="index.php?n=admin&sub=members&char=c">C</a> 
              <a href="index.php?n=admin&sub=members&char=d">D</a> 
              <a href="index.php?n=admin&sub=members&char=e">E</a> 
              <a href="index.php?n=admin&sub=members&char=f">F</a> 
              <a href="index.php?n=admin&sub=members&char=g">G</a> 
              <a href="index.php?n=admin&sub=members&char=h">H</a> 
              <a href="index.php?n=admin&sub=members&char=i">I</a> 
              <a href="index.php?n=admin&sub=members&char=j">J</a> 
              <a href="index.php?n=admin&sub=members&char=k">K</a> 
              <a href="index.php?n=admin&sub=members&char=l">L</a> 
              <a href="index.php?n=admin&sub=members&char=m">M</a> 
              <a href="index.php?n=admin&sub=members&char=n">N</a> 
              <a href="index.php?n=admin&sub=members&char=o">O</a> 
              <a href="index.php?n=admin&sub=members&char=p">P</a> 
              <a href="index.php?n=admin&sub=members&char=q">Q</a> 
              <a href="index.php?n=admin&sub=members&char=r">R</a> 
              <a href="index.php?n=admin&sub=members&char=s">S</a> 
              <a href="index.php?n=admin&sub=members&char=t">T</a> 
              <a href="index.php?n=admin&sub=members&char=u">U</a> 
              <a href="index.php?n=admin&sub=members&char=v">V</a> 
              <a href="index.php?n=admin&sub=members&char=w">W</a> 
              <a href="index.php?n=admin&sub=members&char=x">X</a> 
              <a href="index.php?n=admin&sub=members&char=y">Y</a> 
              <a href="index.php?n=admin&sub=members&char=z">Z</a>              </b>            </td>
          </tr>
        </tbody></table>      </td>
    </tr>
    <tr class="catbg3">
      <td width="20"> </td>
      <td style="width: auto;" nowrap="nowrap"><?php echo $lang['user_name'];?></td>
      <td width="125" align="center"><?php echo $lang['date_reg'];?></td>
      <td width="35" align="center"><?php echo $lang['active_ban'];?></td>
    </tr>
    <?php foreach($items as $item){ ?>
    <tr style="text-align: center;">
      <td class="windowbg2">
        <a href="index.php?n=account&sub=pms&action=add&to=<?php echo $item['username']; ?>" title="<?php echo $lang['personal_message'];?>"><img src="<?php echo $currtmp; ?>/images/icons/email.gif" alt="[PM]" align="middle"></a>      </td>
      <td class="windowbg" align="left"><a href="index.php?n=admin&sub=members&id=<?php echo $item['id']; ?>" title="<?php echo $lang['viewedit_profile'];?> <?php echo $item['username']; ?>"><?php echo $item['username']; ?></a></td>
      <td class="windowbg" align="left"><?php echo $item['joindate']; ?></td>
      <td class="windowbg" align="center"><b><?php echo (isset($item['locked']) && $item['locked']==1?'<font color=red>0</font>':'<font color=green>1</font>'); ?> /
      <?php echo (isset($item['g_id']) && $item['g_id']==5?'<font color=red>1</font>':'<font color=green>0</font>'); ?></b></td>
    </tr>
    <?php } ?>
    <tr>
      <td class="titlebg" colspan="8"><?php echo $lang['post_pages'];?>: <?php echo $pages_str; ?> </td>
    </tr>
  </tbody>
</table>
<?php } ?>
<?php write_metalborder_footer(); ?>
<?php builddiv_end() ?>