<br>
<?php builddiv_start(1, $lang['statistic']) ?>
<center>

<?php if($num_chars == 0): ?>
    <font color=red size=3><b>Aucun personnages</b></font>
<?php else: ?>
<center>

<table width="90%">
	<tr>
		<td colspan="2" align="left" style="padding-left: 20px;">
            <font color=blue size=4><?php echo $lang['Alliance']; ?>: <?php echo $num_ally; ?> (<?php echo $pc_ally; ?>%)</font>
        </td>
		<td colspan="2" align="right" style="padding-right: 20px;">
            <font color=red size=4><?php echo $lang['Horde']; ?>: <?php echo $num_horde; ?> (<?php echo $pc_horde; ?>%)</font>
        </td>
	</tr>
    <tr>
		<td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Human']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $currtmp; ?>/images/stat/1-0.gif" alt="" /></td>
		<td align="left"><?php echo $rc[1]; ?> (<?php echo $pc_human; ?>%)</td>
		<td align="right"><?php echo $rc[2]; ?> (<?php echo $pc_orc; ?>%)</td>
		<td align="right"><img onmouseover="ddrivetip('<?php echo $lang['Orc']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $currtmp; ?>/images/stat/2-0.gif" alt="" /></td>
	</tr>
	<tr>
        <td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Dwarf']; ?>')" onmouseout="hideddrivetip()"	src="<?php echo $currtmp; ?>/images/stat/3-0.gif" alt="" /></td>
        <td align="left"><?php echo $rc[3]; ?> (<?php echo $pc_dwarf; ?>%)</td>
        <td align="right"><?php echo $rc[5]; ?> (<?php echo $pc_undead; ?>%)</td>
        <td align="right"><img onmouseover="ddrivetip('<?php echo $lang['Undead']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $currtmp; ?>/images/stat/5-0.gif" alt="" /></td>
    </tr>
    <tr>
        <td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Nightelf']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $currtmp; ?>/images/stat/4-0.gif" alt="" /></td>
        <td align="left"><?php echo $rc[4]; ?> (<?php echo $pc_ne; ?>%)</td>
        <td align="right"><?php echo $rc[6]; ?> (<?php echo $pc_tauren; ?>%)</td>
        <td align="right"><img onmouseover="ddrivetip('<?php echo $lang['Tauren']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $currtmp; ?>/images/stat/6-0.gif" alt="" /></td>
    </tr>
    <tr>
        <td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Gnome']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $currtmp; ?>/images/stat/7-0.gif" alt="" /></td>
        <td align="left"><?php echo $rc[7]; ?> (<?php echo $pc_gnome; ?>%)</td>
        <td align="right"><?php echo $rc[8]; ?> (<?php echo $pc_troll; ?>%)</td>
        <td align="right"><img onmouseover="ddrivetip('<?php echo $lang['Troll']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $currtmp; ?>/images/stat/8-0.gif" alt="" /></td>
    </tr>
    <tr>
        <td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Dranei']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $currtmp; ?>/images/stat/11-0.gif" alt="" /></td>
        <td align="left"><?php echo $rc[11]; ?> (<?php echo $pc_dranei; ?>%)</td>
        <td align="right"><?php echo $rc[10]; ?> (<?php echo $pc_be; ?>%)</td>
        <td align="right"><img onmouseover="ddrivetip('<?php echo $lang['Bloodelf'];?>')" onmouseout="hideddrivetip()" src="<?php echo $currtmp; ?>/images/stat/10-0.gif" alt="" /></td>
    </tr>
	<tr>
		<td colspan="2" align="left" style="padding-left: 20px;"></td>
		<td colspan="2" align="right" style="padding-right: 20px;"></td>
	</tr>
</table>
</center>
<?php endif; ?>

</center>
<?php builddiv_end() ?>