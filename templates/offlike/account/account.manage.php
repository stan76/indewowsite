<?php if($user['id']>0 && isset($profile)){ ?>
<style type="text/css">
    .attribute { font-family: "Arial", "Helvetica", "Sans-Serif"; color: #000000; font-weight: bold; font-size: 12;}
    #icon { position: absolute;	top: -145px; left: 47px; z-index: 99; _top: -145px}
    #text { position: relative;	top: 52px;	left: 10px;	z-index: 99; }
    #wrapper { position: relative; z-index: 99; }
	#wrapper99 { position: relative; z-index: 98; }
		.title	{
			font-family: palatino, georgia, times new roman, serif;
			font-size: 13pt;
			color: #640909;
		}
</style>


<table cellspacing = "0" cellpadding = "0" border = "0" width = "100%">
<tr>

	<td width = "100%" align = "center">
		<table width = "100%" cellspacing = "0" cellpadding = "0" border="0" background="<?php echo $currtmp; ?>/images/account/tbc-background.jpg">
		<tr>
			<td>
			 <div id="wrapper"><div id="icon"><img src="<?php echo $currtmp; ?>/images/account/draenei-top.gif"></div></div>
      </td>

      <td valign = "top"><a href = "/account/"><img src ="<?php echo $currtmp; ?>/images/pixel.gif" width="90" height = "161" border="0" ></a></td>
			<td><img src="<?php echo $currtmp; ?>/images/pixel.gif" border="0" height="161" width="90"></td>
	</tr>
  </table>
	<table cellspacing = "0" cellpadding = "0" border = "0" width = "100%">
	<tr>
	 <td background = "<?php echo $currtmp; ?>/images/account/bottom.gif" width = "100%" ><img src ="<?php echo $currtmp; ?>/images/pixel.gif" height = "18" width = "200"></td>
	</tr>
	</table>
	</td>
	<td width = "10%"></td>
</tr>
<tr>
	  <td colspan="3">
		  <table cellspacing = "0" cellpadding = "0" border = "0" width = "100%">
	  		<tr>
				  <td background = "images/bottom.gif" width = "100%" ><img src ="<?php echo $currtmp; ?>/images/pixel.gif" height = "18" width = "200"></td>
	  		</tr>
		  </table>
	  </td>
  </tr>
</table>

<?php builddiv_start() ?>

<center>
<!--Shadow Top-->
<table cellspacing = "0" cellpadding = "0" border = "0"><tr><td><img src = "<?php echo $currtmp; ?>/images/shadow-top-left.gif" width = "5" height = "4"></td><td background = "<?php echo $currtmp; ?>/images/shadow-top.gif">
<img src = "<?php echo $currtmp; ?>/images/shadow-top-left-left.gif" width = "12" height = "4"></td><td align = "right" background = "<?php echo $currtmp; ?>/images/shadow-top.gif">
<img src = "<?php echo $currtmp; ?>/images/shadow-top-right-right.gif" width = "12" height = "4"></td><td><img src = "<?php echo $currtmp; ?>/images/shadow-top-right.gif" width = "9" height = "4"></td></tr><tr>
<td valign = "top" background = "<?php echo $currtmp; ?>/images/shadow-left.gif"><img src = "<?php echo $currtmp; ?>/images/shadow-left-top.gif" width = "5" height = "12"></td>
<td colspan = "2" rowspan = "2" style="background-image:url('<?php echo $currtmp; ?>/images/header-left2.jpg'); background-repeat: no-repeat;">
<!--Shadow Top-->
<table cellspacing = "0" cellpadding = "4" border = "0">
<tr>
	<td>
<h3 class="title"><font color="white"><?php echo $lang['change_your_info'];?></font></h3>
<p>

<center>


<form name="mainform" method="post" action="index.php?n=account&sub=manage&action=change" enctype="multipart/form-data" onsubmit="return validateforms(this)">
<table width = "510" cellspacing = "0" cellpadding = "0" border = "0">
<tr>

	<td>
	<span>
   <?php echo ("$lang[accountmanange_intro]"); ?>
	</span>
	</td>

</tr>
</table>
</center>
<br />
<!--Modification thème -->
<?php write_subheader($lang['general_info']); ?>

<table width = "550" style = "border-width: 0px; border-style: dotted; border-color: #928058;">
<tr><td><table style = "width:100%; border-width: 1px; border-style: solid; border-color: black; background-image: url('<?php echo $currtmp; ?>/images/light3.jpg');"><tr><td>

<table border=0 cellspacing=0 cellpadding=4>
<?php if((int)$MW->getConfig->generic->change_template) { ?>
<tr>
      <td align=center>
      <font face="arial,helvetica"><span><b>
     	<?php echo$lang['theme'];?>
			<br />
      </b></span></font>
      </td>
      <td align=center><table><tr><td>
			<select name="profile[theme]">
            <?php
            $i = 0;
            foreach($MW->getConfig->templates->template as $template){ ?>
            <option value="<?php echo$i;?>"<?php if($profile['theme']==$i)echo' selected';?>><?php echo (string)$template;?>
            <?php $i++; } ?>
            </option>
          </select>
</td>
</tr></table></td>

</tr>
<?php } ?>
</table>

<div align="center">
    <input type="image" src="<?php echo $currtmp; ?>/images/button-update.gif" class="button" style="font-size:12px;" value="<?php echo $lang['dochange'];?>">
</div>
</td></tr></table>
</td></tr></table>
</form>
</center>
<!--Modification thème fin-->

<br />

<!--Autres informations-->
<?php write_subheader($lang['other_info']); ?>


<table width = "550" style = "border-width: 0px; border-style: dotted; border-color: #928058;"><tr><td>
<table style = "width:100%; border-width: 1px; border-style: solid; border-color: black; background-image: url('<?php echo $currtmp; ?>/images/light3.jpg');"><tr><td>

<table border=0 cellspacing=0 cellpadding=4>
<!--Changer le mot de passe-->
    <?php if((int)$MW->getConfig->generic->change_pass) { ?>

		<tr>
		<form method="post" action="index.php?n=account&sub=manage&action=changepass">
      <td align=left valign ="top">

      <font face="arial,helvetica" size=-1><span><b>
      <?php if (isset($lang['newpass']))echo $lang['newpass'];?>
      </b></span></font>
      </td>
      <td align=left><table border=0 cellspacing=0 cellpadding=0><tr><td><input type="password" size="22" name="new_pass">
			<input type="submit" value="Terminer" class="button" style="font-size:11px;"><span></span></td><td valign = "top">
	   </td></tr></table></td>
      </td>
    </form>
		</tr>
    <?php } ?>
<!--Changer le mot de passe fin-->
	
<!--Changer l'E-mail-->
   <?php if((int)$MW->getConfig->generic->change_email) { ?>

		<tr>
		<form method="post" action="index.php?n=account&sub=manage&action=changeemail">
      <td align=left valign = "top">

      <font face="arial,helvetica" size=-1><span><b>
     <?php if (isset($lang['newemail']))echo $lang['newemail'];?>
      </b></span></font>
      </td>
      <td align=left><table border=0 cellspacing=0 cellpadding=0><tr><td>
			<input type='text' name='new_email' size='22' value='&nbsp;&nbsp;<?php echo $profile['email'];?>'>
                <input type="submit" value="Terminer" class="button" style="font-size:11px;"><span></span></td><td valign = "top">
	   </td></tr></table></td>
      </td>
    </form>
		</tr>

    <?php }else{ ?>
				<tr>
      <td align=right valign = "top">

      <font face="arial,helvetica" size=-1><span><b>
     <?php echo $lang['email'];?>
      </b></span></font>
      </td>
      <td align=left><table border=0 cellspacing=0 cellpadding=0><tr><td>
			<input type="text" size="36" value="&nbsp;&nbsp;<?php echo $profile['email'];?>" readonly>
               <span></span></td><td valign = "top">
	   </td></tr></table></td>
      </td>
		</tr>
		<?php } ?>
<!--Changer l'E-mail fin-->
</table>
</td></tr></table>
</td></tr></table>
</center>
<!--Autres informations fin-->

<br />

<!--Extensions-->
<?php write_subheader($lang['extensions']); ?>

<table width = "550" style = "border-width: 0px; border-style: dotted; border-color: #928058;"><tr><td><table style = "border-width: 1px; border-style: solid; border-color: black; background-image: url('<?php echo $currtmp; ?>/images/light3.jpg');"><tr><td>

<table border=0 cellspacing=0 cellpadding=4>

<tr>
		<td>
		<form method="POST" action="<?php echo$_SERVER['PHP_SELF'];?>?n=account&sub=manage&action=change_gameplay">
		  <input type="hidden" name="switch_wow_type" value="cataclysm" />
		  <input type='image' class="button"  src='<?php echo $currtmp; ?>/images/box-cata.png' />
	      </td>
		<td>
                  <b><font size="2"><?php echo $lang['make_acct_cataclysm'];?></font></b>
				</form>
		</td>
</tr>
<tr>
		<td>
		<form method="POST" action="<?php echo$_SERVER['PHP_SELF'];?>?n=account&sub=manage&action=change_gameplay">
		  <input type="hidden" name="switch_wow_type" value="wotlk" />
		  <input type='image' class="button"  src='<?php echo $currtmp; ?>/images/box-wrath.png' />
	      </td>
		<td>
                  <b><font size="2"><?php echo $lang['make_acct_wotlk'];?></font></b>
				</form>
		</td>
</tr>
<tr>
		<td>
		<form method="POST" action="<?php echo$_SERVER['PHP_SELF'];?>?n=account&sub=manage&action=change_gameplay">
		  <input type="hidden" name="switch_wow_type" value="tbc" />
		  <input type='image' class="button"  src='<?php echo $currtmp; ?>/images/box-bc.png' />
	      </td>
		<td>
                  <b><font size="2"><?php echo $lang['make_acct_tbc'];?></font></b>
				</form>
		</td>
</tr>
<tr>
		<form method="POST" action="<?php echo$_SERVER['PHP_SELF'];?>?n=account&sub=manage&action=change_gameplay">
		<td>
		  <input type="hidden" name="switch_wow_type" value="classic" />
		  <input type='image' class="button" src='<?php echo $currtmp; ?>/images/box-wow.png' />
	  </td>
		<td>
                  <b><font size="2"><?php echo $lang['make_acct_classic'];?></font></b>

		</td>
    </form>
</tr>

</table>
</td></tr></table>
</td></tr></table>
</form>
<br />
<!--Extensions fin-->

</td></tr></table>
</center>
<!--Shadow Bottom-->
</td><td valign = "top" background = "<?php echo $currtmp; ?>/images/shadow-right.gif">
<img src = "<?php echo $currtmp; ?>/images/shadow-right-top.gif" width = "9" height = "12"></td></tr>
<tr><td valign = "bottom" background = "<?php echo $currtmp; ?>/images/shadow-left.gif">
<img src = "<?php echo $currtmp; ?>/images/shadow-left-bot.gif" width = "5" height = "12"></td>
<td valign = "bottom" background = "<?php echo $currtmp; ?>/images/shadow-right.gif">
<img src = "<?php echo $currtmp; ?>/images/shadow-right-bot.gif" width = "9" height = "12"></td></tr>
<tr><td><img src = "<?php echo $currtmp; ?>/images/shadow-bot-left.gif" width = "5" height = "10"></td>
<td background = "<?php echo $currtmp; ?>/images/shadow-bot.gif">
<img src = "<?php echo $currtmp; ?>/images/shadow-bot-left-left.gif" width = "12" height = "10"></td>
<td align = "right" background = "<?php echo $currtmp; ?>/images/shadow-bot.gif">
<img src = "<?php echo $currtmp; ?>/images/shadow-bot-right-right.gif" width = "12" height = "10"></td>
<td><img src = "<?php echo $currtmp; ?>/images/shadow-bot-right.gif" width = "9" height = "10"></td></tr></table>
<!--Shadow Bottom-->

</center>

<?php builddiv_end() ?>

<?php
}
 ?>
