<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>
<div class="clear" style="height:151px"></div>

<div id="cover" style="position:absolute; z-index:999999; top:0px; right:10px; width:300px; height:3000px; display:none; background-color:red;"></div>
<div id="topicheader">
	<div style="float: right;"> <a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/forum-index.gif" width="104" height="41" border="0" alt="" /></a> </div>
	<div id="topicview" style="margin-top: 14px;">
		<ul>
			<li><span title="Current time"><small><font color="white"><?php echo (isset($this->_rootref['TOTAL_REGISTERED_USERS_ONLINE'])) ? $this->_rootref['TOTAL_REGISTERED_USERS_ONLINE'] : ''; ?> | <?php echo (isset($this->_rootref['TOTAL_GUEST_USERS_ONLINE'])) ? $this->_rootref['TOTAL_GUEST_USERS_ONLINE'] : ''; if ($this->_rootref['S_SWITCH_GUEST_DISPLAY']) {  ?> &bull; <a href="<?php echo (isset($this->_rootref['U_SWITCH_GUEST_DISPLAY'])) ? $this->_rootref['U_SWITCH_GUEST_DISPLAY'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SWITCH_GUEST_DISPLAY'])) ? $this->_rootref['L_SWITCH_GUEST_DISPLAY'] : ((isset($user->lang['SWITCH_GUEST_DISPLAY'])) ? $user->lang['SWITCH_GUEST_DISPLAY'] : '{ SWITCH_GUEST_DISPLAY }')); ?></a><?php } ?> | <?php echo (isset($this->_rootref['CURRENT_TIME_CLEAN'])) ? $this->_rootref['CURRENT_TIME_CLEAN'] : ''; ?>&nbsp;</font></small></span></li>
		</ul>
	</div>
</div>

<div class="theader">
	<div class="lpage"></div>
	<div class="rpage-thread">
		<?php if ($this->_rootref['PAGINATION']) {  $this->_tpl_include('pbwow_pagination.html'); } ?>		
	</div>
</div>


<div id="postbackground">
	<div class="right">
		<table width="90%" border="0" cellpadding="0" cellspacing="0" class="tableoutline" style="margin: 0 auto;">
			<tr>
				<td class="tableheader">
					<table cellspacing="0" cellpadding="0" border="0" width="100%">
						<tr>
							<td><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" border="0" width="1" height="22" alt="" /></td>
							<td style="padding: 0 0 0 5px;" width="100%"><span> <a class="filter" href="<?php echo (isset($this->_rootref['U_SORT_USERNAME'])) ? $this->_rootref['U_SORT_USERNAME'] : ''; ?>"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?></a></span></td>
						</tr>
					</table>
				</td>
				<td class="tableheader" style="padding: 0 0 0 5px;"><span> <a class="filter" href="<?php echo (isset($this->_rootref['U_SORT_LOCATION'])) ? $this->_rootref['U_SORT_LOCATION'] : ''; ?>"><?php echo ((isset($this->_rootref['L_FORUM_LOCATION'])) ? $this->_rootref['L_FORUM_LOCATION'] : ((isset($user->lang['FORUM_LOCATION'])) ? $user->lang['FORUM_LOCATION'] : '{ FORUM_LOCATION }')); ?></a></span></td>
				<td class="tableheader" style="padding: 0 0 0 5px;"><span> <a class="filter" href="<?php echo (isset($this->_rootref['U_SORT_UPDATED'])) ? $this->_rootref['U_SORT_UPDATED'] : ''; ?>"><?php echo ((isset($this->_rootref['L_LAST_UPDATED'])) ? $this->_rootref['L_LAST_UPDATED'] : ((isset($user->lang['LAST_UPDATED'])) ? $user->lang['LAST_UPDATED'] : '{ LAST_UPDATED }')); ?></a></span></td>
			</tr>
			<?php if (sizeof($this->_tpldata['user_row'])) {  $_user_row_count = (isset($this->_tpldata['user_row'])) ? sizeof($this->_tpldata['user_row']) : 0;if ($_user_row_count) {for ($_user_row_i = 0; $_user_row_i < $_user_row_count; ++$_user_row_i){$_user_row_val = &$this->_tpldata['user_row'][$_user_row_i]; ?>
			<tr class="rows">
				<?php if (!($_user_row_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="ta2">
				<?php } else { ?><td class="t2"><?php } ?>
					<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/square-grey.gif" width="15" height="15" style="vertical-align:middle;" border="0" alt="" /><?php echo $_user_row_val['USERNAME_FULL']; ?>
					<?php if ($_user_row_val['USER_IP']) {  ?> <span style="margin-left: 30px;"><?php echo ((isset($this->_rootref['L_IP'])) ? $this->_rootref['L_IP'] : ((isset($user->lang['IP'])) ? $user->lang['IP'] : '{ IP }')); ?>: <a href="<?php echo $_user_row_val['U_USER_IP']; ?>"><?php echo $_user_row_val['USER_IP']; ?></a> &#187; <a href="<?php echo $_user_row_val['U_WHOIS']; ?>" onclick="popup(this.href, 750, 500); return false;"><?php echo ((isset($this->_rootref['L_WHOIS'])) ? $this->_rootref['L_WHOIS'] : ((isset($user->lang['WHOIS'])) ? $user->lang['WHOIS'] : '{ WHOIS }')); ?></a></span><?php } if ($_user_row_val['USER_BROWSER']) {  ?><br /><?php echo $_user_row_val['USER_BROWSER']; } ?></td>
				
				<?php if (!($_user_row_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="ta3">
				<?php } else { ?><td class="t3"><?php } ?><a href="<?php echo $_user_row_val['U_FORUM_LOCATION']; ?>"><?php echo $_user_row_val['FORUM_LOCATION']; ?></a></td>				
				<?php if (!($_user_row_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="ta6" style="white-space: nowrap">
				<?php } else { ?><td class="t6" style="white-space: nowrap" ><?php } echo $_user_row_val['LASTUPDATE']; ?>&nbsp;
				</td>
			</tr>
			<?php }} } else { ?>
			<tr class="rows" style="height:30px">
				<td class="ta5" colspan="3">
				<span style="color:#FFFFFF;"><strong><?php echo ((isset($this->_rootref['L_NO_ONLINE_USERS'])) ? $this->_rootref['L_NO_ONLINE_USERS'] : ((isset($user->lang['NO_ONLINE_USERS'])) ? $user->lang['NO_ONLINE_USERS'] : '{ NO_ONLINE_USERS }')); if ($this->_rootref['S_SWITCH_GUEST_DISPLAY']) {  ?> &bull; <a href="<?php echo (isset($this->_rootref['U_SWITCH_GUEST_DISPLAY'])) ? $this->_rootref['U_SWITCH_GUEST_DISPLAY'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SWITCH_GUEST_DISPLAY'])) ? $this->_rootref['L_SWITCH_GUEST_DISPLAY'] : ((isset($user->lang['SWITCH_GUEST_DISPLAY'])) ? $user->lang['SWITCH_GUEST_DISPLAY'] : '{ SWITCH_GUEST_DISPLAY }')); ?></a><?php } ?></strong></span>
				</td>
			</tr>
			
			<?php } ?>

		</table>
	</div>
</div>





			
				


<div id="topicfooter" style="height:22px">
	<div class="rpage">
		<?php if ($this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_POSTS']) {  $this->_tpl_include('pbwow_pagination.html'); } ?>
	</div>
</div>
<div class="forum-index">
	<div class="findex" style="margin-top:-1px"> <a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/forum-index.gif" width="104" height="41" border="0" title="" alt="" /></a> </div>
</div>
<div style="width: 100%; height: 20px;"></div>


<?php $this->_tpl_include('pbwow_jumpbox_2.html'); ?>


<div align="center" style="padding:10px; margin-top:-20px">
	<span><b><?php echo ((isset($this->_rootref['L_LEGEND'])) ? $this->_rootref['L_LEGEND'] : ((isset($user->lang['LEGEND'])) ? $user->lang['LEGEND'] : '{ LEGEND }')); ?></b> [ <a href="<?php echo (isset($this->_rootref['U_FAQ'])) ? $this->_rootref['U_FAQ'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_FAQ_EXPLAIN'])) ? $this->_rootref['L_FAQ_EXPLAIN'] : ((isset($user->lang['FAQ_EXPLAIN'])) ? $user->lang['FAQ_EXPLAIN'] : '{ FAQ_EXPLAIN }')); ?>">More Details</a> ]</span>
	<table cellspacing="0" cellpadding="0" id="iconLegend">
		<tr>
			<td>
				<table class="tb2" width="100%" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td style="padding:10px"><?php echo (isset($this->_rootref['LEGEND'])) ? $this->_rootref['LEGEND'] : ''; ?></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div>
<?php $this->_tpl_include('overall_footer.html'); ?>