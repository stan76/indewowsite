<br>
<?php builddiv_start(1, $lang['si_acc']) ?>
<?php if($user['id']>0 && $profile){ ?>
<table align="center" width="100%" style="font-size:0.8em;"><tr><td align="center">
<?php write_metalborder_header(); ?>
    <div style="border: 0px dotted #1E4378;background:none;margin:4px;padding:6px 9px 6px 9px;text-align:left;width:70%;">
        <b><?php echo $lang['username'];?>:</b> <input type="text" size="36" style="margin:1px;" value="<?php echo$profile['username'];?>" readonly> <br/>
    </div>
<?php write_metalborder_footer(); ?>
<?php write_metalborder_header(); ?>
    <?php if($profile['hideemail']!=1){ ?>
    <div style="border: 0px dotted #1E4378;background:none;margin:4px;padding:6px 9px 6px 9px;text-align:left;width:70%;">
        <b>E-mail</b> <input type="text" size="36" style="margin:1px;" value="<?php echo$profile['email'];?>" readonly> <br/>
    </div>
	<?php } ?>
<?php write_metalborder_footer(); ?>
<?php write_metalborder_header(); ?>
    <div style="border: 0px dotted #1E4378;background:none;margin:4px;padding:6px 9px 6px 9px;text-align:left;width:70%;">
        <li><a href="index.php?n=account&sub=pms&action=add&to=<?php echo$profile['username'];?>"><?php echo $lang['personal_message'];?></a>
    </div>
<?php write_metalborder_footer(); ?>
</td></tr></table>
<?php } ?>
<?php builddiv_end() ?>