<?php if (!defined('IN_PHPBB')) exit; ?><!-- Somehow, if a catagory is visible but the forums within are not (due to none existing or no permission) this top part is not executed which leaves an unclosed GRAY CATAGORY and an unopened BLACK STAND-ALONE table. P.S. Don't try to understand this template. I wrecked my brain making this and even I can hardly understand it fully. --><?php $_forumrow_count = (isset($this->_tpldata['forumrow'])) ? sizeof($this->_tpldata['forumrow']) : 0;if ($_forumrow_count) {for ($_forumrow_i = 0; $_forumrow_i < $_forumrow_count; ++$_forumrow_i){$_forumrow_val = &$this->_tpldata['forumrow'][$_forumrow_i]; if (! $_forumrow_val['S_FIRST_ROW']) {  if ($_forumrow_val['S_NO_CAT'] || $_forumrow_val['S_IS_CAT']) {  if (! $_forumrow_val['S_NO_CAT_LAST']) {  ?><!-- ### CLEAN UP previous GRAY CATAGORY ### -->
			<div style="clear:both">
				<!--ie-->
			</div>
		</div>
		<?php if ($_forumrow_val['S_NO_CAT']) {  ?><table width="100%"><?php } } } if ($_forumrow_val['S_NO_CAT_LAST']) {  ?></table><?php } } if ($_forumrow_val['S_NO_CAT_EACH']) {  ?><!-- ### BLACK STAND-ALONE ### --><?php if ($_forumrow_val['S_FIRST_ROW']) {  ?><table width="100%"><?php } if (!($_forumrow_val['S_ROW_COUNT'] & 1)  ) {  ?><tr><?php } ?>
				<td>
					<?php if ($_forumrow_val['FORUM_IMAGE']) {  ?>
					<div style="background:url(<?php echo $_forumrow_val['FORUM_IMAGE_SRC']; ?>) no-repeat 7px 7px;" onclick="window.location.href=('<?php echo $_forumrow_val['U_VIEWFORUM']; ?>')">
					<?php } else { ?>
					<div style="background:url(<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/forumbullets/bullet.gif) no-repeat 7px 7px;" onClick="window.location.href=('<?php echo $_forumrow_val['U_VIEWFORUM']; ?>')">
					<?php } ?>
						<h3><?php if ($_forumrow_val['S_UNREAD_FORUM']) {  ?><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/new-icon.gif" width="19" height="15" />&nbsp;&nbsp;<?php } if ($this->_rootref['S_ENABLE_FEEDS'] && $_forumrow_val['S_FEED_ENABLED']) {  ?><!-- <a class="feed-icon-forum" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo $_forumrow_val['FORUM_NAME']; ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?f=<?php echo $_forumrow_val['FORUM_ID']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/prosilver/feed.gif" alt="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo $_forumrow_val['FORUM_NAME']; ?>" /></a> --><?php } ?><a href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo $_forumrow_val['FORUM_NAME']; ?></a></h3>
						<p><?php echo $_forumrow_val['FORUM_DESC']; ?></p>
						<?php if ($_forumrow_val['SUBFORUMS'] && $_forumrow_val['S_LIST_SUBFORUMS']) {  ?><br /><strong><?php echo $_forumrow_val['L_SUBFORUM_STR']; ?></strong> <?php echo $_forumrow_val['SUBFORUMS']; } ?>
					</div>
				</td>
			<?php if (! !($_forumrow_val['S_ROW_COUNT'] & 1)  ) {  ?></tr><?php } if ($_forumrow_val['S_LAST_ROW']) {  if (!($_forumrow_val['S_ROW_COUNT'] & 1)  ) {  ?></tr><?php } ?></table><?php } } if ($_forumrow_val['S_IS_CAT'] && ! $_forumrow_val['S_NO_CAT']) {  ?><!-- ### GRAY CATAGORY ### -->
		<div class="parent-forum haschild" onClick="toggle('childNode<?php echo $_forumrow_val['FORUM_ID']; ?>');toggleChild('arrow<?php echo $_forumrow_val['FORUM_ID']; ?>')">
			<?php if ($_forumrow_val['FORUM_IMAGE']) {  ?>
			<div style="background:url(<?php echo $_forumrow_val['FORUM_IMAGE_SRC']; ?>) no-repeat 7px 7px">
			<?php } else { ?>
			<div style="background:url(<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/forumbullets/bullet.gif) no-repeat 7px 7px">
			<?php } ?>
				<em id="arrow<?php echo $_forumrow_val['FORUM_ID']; ?>" class="child-view"></em>
				<h3><?php if ($_forumrow_val['S_IS_CAT']) {  ?><a href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo $_forumrow_val['FORUM_NAME']; ?></a><?php } else { echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); } ?></h3>
				<p><?php echo $_forumrow_val['FORUM_DESC']; ?></p>
			</div>
		</div>
		
		<div class="child-listing" style="display:<?php if ($_forumrow_val['S_UNREAD_FORUM']) {  ?>block<?php } else { ?>none<?php } ?>" id="childNode<?php echo $_forumrow_val['FORUM_ID']; ?>">
	<?php } if (! ( $_forumrow_val['S_IS_CAT'] || $_forumrow_val['S_NO_CAT'] || $_forumrow_val['S_NO_CAT_EACH'] )) {  ?><!-- ### BLUE CHILD ### --><?php if ($_forumrow_val['FORUM_IMAGE']) {  ?>
			<div class="child icon" style="background-image:url(<?php echo $_forumrow_val['FORUM_IMAGE_SRC']; ?>);" onclick="window.location.href=('<?php echo $_forumrow_val['U_VIEWFORUM']; ?>')">
			<?php } else { ?>
			<div class="child " onClick="window.location.href=('<?php echo $_forumrow_val['U_VIEWFORUM']; ?>')">
			<?php } ?>
				<h3><?php if ($_forumrow_val['S_UNREAD_FORUM']) {  ?><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/new-icon.gif" width="19" height="15" />&nbsp;&nbsp;<?php } ?><a href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo $_forumrow_val['FORUM_NAME']; ?></a></h3>
				<?php if ($_forumrow_val['SUBFORUMS'] && $_forumrow_val['S_LIST_SUBFORUMS']) {  ?><br /><strong><?php echo $_forumrow_val['L_SUBFORUM_STR']; ?></strong> <?php echo $_forumrow_val['SUBFORUMS']; } ?>
			</div>
	<?php } if ($_forumrow_val['S_LAST_ROW'] && ! ( $_forumrow_val['S_NO_CAT'] || $_forumrow_val['S_NO_CAT_EACH'] )) {  ?><!-- ### CLEAN UP last GRAY CATAGORY ### -->
			<div style="clear:both">
				<!--ie-->
			</div>
		</div>
	<?php } }} else { ?>
	<table width="100%">
		<tr>
			<td>
				<div style="background:url(<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/noforums.gif) no-repeat 7px 7px;">
					<h3><a href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo ((isset($this->_rootref['L_NO_FORUMS'])) ? $this->_rootref['L_NO_FORUMS'] : ((isset($user->lang['NO_FORUMS'])) ? $user->lang['NO_FORUMS'] : '{ NO_FORUMS }')); ?></a></h3>
				</div>
			</td>
		</tr>
	</table>
<?php } ?>