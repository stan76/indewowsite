<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?><!-- This part is for the header overlay "extras" on the index page. -->
<div class="index-extras1" style="width:100%; overflow:hidden; position:absolute; height:640px; top:27px;">
	<div class="index-extras2" style="margin:0 auto; position:relative; display:block; width:775px; top:92px">
		<div class="indexbg-bg1"></div>
		<div class="indexbg-bg2"></div>
		<div class="indexbg-extra1"></div>
		<div class="indexbg-extra2"></div>
		<div class="indexbg-extra3"></div>
		<div class="indexbg-extra4"></div>
	</div>
</div>

<div class="drop-shadow" style="background:none"></div>

<center>
	<div id="container" style="width: 775px; position: relative; text-align:right;">
		<!--// Begin Large Box //-->
		<div class="border" style="margin: 0 auto;">
			<div class="im1">
				<div class="im2">
					<div class="im3">
						<div class="im4">
							<div class="im5">
								<div class="im6">
									<div class="im7">
										<div class="im8">
<div style="background: none; width: 100%; display: block;">
	<div style="width: 700px; margin: 0 auto;" class="index-page">
	
		<!-- CHANGE THIS TO THE TYPE OF INDEX YOU WANT --><?php $this->_tpl_include('custom/index_content1.html'); ?><!-- CHANGE THIS TO THE TYPE OF INDEX YOU WANT -->
	
		<div class="clear"></div>
		<div class="indexing">
		<?php $this->_tpl_include('forumlist_body.html'); if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  ?>
			<div class="parent-forum haschild" onclick="toggle('childNodeONLINE');toggleChild('arrowONLINE')">
				<div style="background:url(<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/whos_online.gif) no-repeat 7px 7px"> <em id="arrowONLINE" class="child-view"></em>
					<?php if ($this->_rootref['U_VIEWONLINE']) {  ?><h3><a href="<?php echo (isset($this->_rootref['U_VIEWONLINE'])) ? $this->_rootref['U_VIEWONLINE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></a></h3><?php } else { ?><h3><b><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></b></h3><?php } ?>
					<p><?php echo (isset($this->_rootref['TOTAL_USERS_ONLINE'])) ? $this->_rootref['TOTAL_USERS_ONLINE'] : ''; ?> (<?php echo ((isset($this->_rootref['L_ONLINE_EXPLAIN'])) ? $this->_rootref['L_ONLINE_EXPLAIN'] : ((isset($user->lang['ONLINE_EXPLAIN'])) ? $user->lang['ONLINE_EXPLAIN'] : '{ ONLINE_EXPLAIN }')); ?>)<br /><?php echo (isset($this->_rootref['RECORD_USERS'])) ? $this->_rootref['RECORD_USERS'] : ''; ?></p>
				</div>
			</div>
			<div class="child-listing" style="display:none" id="childNodeONLINE">
				<p><?php echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; ?>
				<?php if ($this->_rootref['LEGEND']) {  ?><br /><em><?php echo ((isset($this->_rootref['L_LEGEND'])) ? $this->_rootref['L_LEGEND'] : ((isset($user->lang['LEGEND'])) ? $user->lang['LEGEND'] : '{ LEGEND }')); ?>: <?php echo (isset($this->_rootref['LEGEND'])) ? $this->_rootref['LEGEND'] : ''; ?></em><?php } ?></p>
				<div style="clear:both">
					<!--ie-->
				</div>
			</div>
			<?php } if ($this->_rootref['S_DISPLAY_BIRTHDAY_LIST'] && $this->_rootref['BIRTHDAY_LIST']) {  ?>
			<div class="parent-forum haschild" onclick="toggle('childNodeBIRTHDAY');toggleChild('arrowBIRTHDAY')">
				<div style="background:url(<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/birthday.gif) no-repeat 7px 7px"> <em id="arrowBIRTHDAY" class="child-view"></em>
					<h3><b><?php echo ((isset($this->_rootref['L_BIRTHDAYS'])) ? $this->_rootref['L_BIRTHDAYS'] : ((isset($user->lang['BIRTHDAYS'])) ? $user->lang['BIRTHDAYS'] : '{ BIRTHDAYS }')); ?></b></h3>
					<p><?php if ($this->_rootref['BIRTHDAY_LIST']) {  } else { echo ((isset($this->_rootref['L_NO_BIRTHDAYS'])) ? $this->_rootref['L_NO_BIRTHDAYS'] : ((isset($user->lang['NO_BIRTHDAYS'])) ? $user->lang['NO_BIRTHDAYS'] : '{ NO_BIRTHDAYS }')); } ?></p>
				</div>
			</div>
			<div class="child-listing" style="display:none" id="childNodeBIRTHDAY">
				<p><?php if ($this->_rootref['BIRTHDAY_LIST']) {  echo ((isset($this->_rootref['L_CONGRATULATIONS'])) ? $this->_rootref['L_CONGRATULATIONS'] : ((isset($user->lang['CONGRATULATIONS'])) ? $user->lang['CONGRATULATIONS'] : '{ CONGRATULATIONS }')); ?>: <strong><?php echo (isset($this->_rootref['BIRTHDAY_LIST'])) ? $this->_rootref['BIRTHDAY_LIST'] : ''; ?></strong><?php } else { echo ((isset($this->_rootref['L_NO_BIRTHDAYS'])) ? $this->_rootref['L_NO_BIRTHDAYS'] : ((isset($user->lang['NO_BIRTHDAYS'])) ? $user->lang['NO_BIRTHDAYS'] : '{ NO_BIRTHDAYS }')); } ?></p>
				<div style="clear:both">
					<!--ie-->
				</div>
			</div>
			<?php } if ($this->_rootref['NEWEST_USER'] || $this->_rootref['S_DISPLAY_SEARCH'] || ( $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT'] )) {  ?>
			<div class="parent-forum haschild" onclick="toggle('childNodeSTATS');toggleChild('arrowSTATS')">
				<div style="background:url(<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/statistics.gif) no-repeat 7px 7px"> <em id="arrowSTATS" class="child-view"></em>
					<h3><b><?php echo ((isset($this->_rootref['L_STATISTICS'])) ? $this->_rootref['L_STATISTICS'] : ((isset($user->lang['STATISTICS'])) ? $user->lang['STATISTICS'] : '{ STATISTICS }')); ?></b></h3>
					<p><?php echo (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['TOTAL_USERS'])) ? $this->_rootref['TOTAL_USERS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['NEWEST_USER'])) ? $this->_rootref['NEWEST_USER'] : ''; ?></p>
				</div>
			</div>
			<div class="child-listing" style="display:none" id="childNodeSTATS">
				<p align="center">
			<?php if ($this->_rootref['S_DISPLAY_SEARCH'] || ( $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT'] )) {  if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?>
					<a href="<?php echo (isset($this->_rootref['U_SEARCH_UNANSWERED'])) ? $this->_rootref['U_SEARCH_UNANSWERED'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_UNANSWERED'])) ? $this->_rootref['L_SEARCH_UNANSWERED'] : ((isset($user->lang['SEARCH_UNANSWERED'])) ? $user->lang['SEARCH_UNANSWERED'] : '{ SEARCH_UNANSWERED }')); ?></a><?php if ($this->_rootref['S_USER_LOGGED_IN']) {  ?> &bull; <a href="<?php echo (isset($this->_rootref['U_SEARCH_UNREAD'])) ? $this->_rootref['U_SEARCH_UNREAD'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_UNREAD'])) ? $this->_rootref['L_SEARCH_UNREAD'] : ((isset($user->lang['SEARCH_UNREAD'])) ? $user->lang['SEARCH_UNREAD'] : '{ SEARCH_UNREAD }')); ?></a> &bull; <a href="<?php echo (isset($this->_rootref['U_SEARCH_NEW'])) ? $this->_rootref['U_SEARCH_NEW'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_NEW'])) ? $this->_rootref['L_SEARCH_NEW'] : ((isset($user->lang['SEARCH_NEW'])) ? $user->lang['SEARCH_NEW'] : '{ SEARCH_NEW }')); ?></a><?php } ?> &bull; <a href="<?php echo (isset($this->_rootref['U_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['U_SEARCH_ACTIVE_TOPICS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['L_SEARCH_ACTIVE_TOPICS'] : ((isset($user->lang['SEARCH_ACTIVE_TOPICS'])) ? $user->lang['SEARCH_ACTIVE_TOPICS'] : '{ SEARCH_ACTIVE_TOPICS }')); ?></a>
				<?php } if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_FORUMS']) {  ?> &bull; <a href="<?php echo (isset($this->_rootref['U_MARK_FORUMS'])) ? $this->_rootref['U_MARK_FORUMS'] : ''; ?>" accesskey="m"><?php echo ((isset($this->_rootref['L_MARK_FORUMS_READ'])) ? $this->_rootref['L_MARK_FORUMS_READ'] : ((isset($user->lang['MARK_FORUMS_READ'])) ? $user->lang['MARK_FORUMS_READ'] : '{ MARK_FORUMS_READ }')); ?></a><?php } } ?>
				</p>
				<div style="clear:both">
					<!--ie-->
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<div id="forumlistcontainerX" style="text-align:left; padding-top:60px; width: 98%;">
		<div style="clear:both">
			<!--ie-->
		</div>
		<!-- End Content -->
	</div>
</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--// End Large Box //-->
	</div>
</center>

<?php $this->_tpl_include('overall_footer.html'); ?>