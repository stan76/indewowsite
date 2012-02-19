<?php if (!defined('IN_PHPBB')) exit; ?><div id="topimg-container">
	<div id="topimg">
	</div>
</div>

<div class="bg-theme">
	<!-- Start Login Box -->
	<div class="login-header-container">
		<table cellspacing="0" cellpadding="0" border="0" width="100%">
			<tr>
				<td>
					<?php if (! ( $this->_rootref['S_IN_UCP'] || $this->_rootref['S_IN_MCP'] )) {  ?>
					<div id="forumHead" style="position:relative">
						<div class="icon"><a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>"><?php if ($this->_rootref['PBFORUM_IMAGE_SRC']) {  ?><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/forumbullets/wrath/<?php echo (isset($this->_rootref['PBFORUM_IMAGE_SRC'])) ? $this->_rootref['PBFORUM_IMAGE_SRC'] : ''; ?>" width="85" height="89" border="0" /><?php } else { ?><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/forumbullets/wrath/blizzard.gif" width="85" height="89" border="0" /><?php } ?></a></div>
						<div class="list">
							<ul>
								<li class="title">
									<h1 class="ftitle"><?php $_navlinks_count = (isset($this->_tpldata['navlinks'])) ? sizeof($this->_tpldata['navlinks']) : 0;if ($_navlinks_count) {for ($_navlinks_i = 0; $_navlinks_i < $_navlinks_count; ++$_navlinks_i){$_navlinks_val = &$this->_tpldata['navlinks'][$_navlinks_i]; ?><a href="<?php echo $_navlinks_val['U_VIEW_FORUM']; ?>" class="index"><?php echo $_navlinks_val['FORUM_NAME']; ?></a><?php if (! $_navlinks_val['S_IS_LAST']) {  ?>&nbsp;>&nbsp;<?php } }} ?></h1>
								</li>
								
								<li class="sel">
									<div style="white-space:nowrap" class="text"><span><small class="nav">Forum Nav:</small></span></div>
									<form method="post" id="jumpbox2" action="<?php echo (isset($this->_rootref['S_JUMPBOX_ACTION'])) ? $this->_rootref['S_JUMPBOX_ACTION'] : ''; ?>" onsubmit="if(document.jumpbox2.f.value == -1){return false;}" style=" display:inline" >
									<select class="forum-dropdown" name="f" id="f" onchange="if(this.options[this.selectedIndex].value != -1){ document.forms['jumpbox2'].submit() }">
									<?php $_jumpbox_forums_count = (isset($this->_tpldata['jumpbox_forums'])) ? sizeof($this->_tpldata['jumpbox_forums']) : 0;if ($_jumpbox_forums_count) {for ($_jumpbox_forums_i = 0; $_jumpbox_forums_i < $_jumpbox_forums_count; ++$_jumpbox_forums_i){$_jumpbox_forums_val = &$this->_tpldata['jumpbox_forums'][$_jumpbox_forums_i]; if ($_jumpbox_forums_val['S_FORUM_COUNT'] == (1)) {  ?><option value="-1">---------------------------------------</option><?php } ?>
									<option value="<?php echo $_jumpbox_forums_val['FORUM_ID']; ?>"<?php echo $_jumpbox_forums_val['SELECTED']; ?>><?php $_level_count = (isset($_jumpbox_forums_val['level'])) ? sizeof($_jumpbox_forums_val['level']) : 0;if ($_level_count) {for ($_level_i = 0; $_level_i < $_level_count; ++$_level_i){$_level_val = &$_jumpbox_forums_val['level'][$_level_i]; ?>&nbsp; &nbsp;<?php }} echo $_jumpbox_forums_val['FORUM_NAME']; ?></option>
									<?php }} ?>
									</select>
									<input type="submit" value="&nbsp;" style="height:21px; width:21px; background:none; border:none; cursor:pointer" />
									<!--<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" alt="Jump To This Forum" width="21" height="21" border="0" align="middle" title="Jump To This Forum" />-->
									</form>
								</li>
							</ul>
						</div>
					</div>
					<?php } if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_USER_LOGGED_IN']) {  ?>
					<div id="user">
						<div class="top"></div>
						<div class="body">
							<ul>
								<li class="gateway"><span>Name:</span></li>
								<li><span title="<?php echo ((isset($this->_rootref['L_SEARCH_SELF'])) ? $this->_rootref['L_SEARCH_SELF'] : ((isset($user->lang['SEARCH_SELF'])) ? $user->lang['SEARCH_SELF'] : '{ SEARCH_SELF }')); ?>"><b><a href="<?php echo (isset($this->_rootref['U_SEARCH_SELF'])) ? $this->_rootref['U_SEARCH_SELF'] : ''; ?>"><?php echo (isset($this->_rootref['S_USERNAME'])) ? $this->_rootref['S_USERNAME'] : ''; ?></a></b></span></li>
								<br/>
								<?php if ($this->_rootref['S_DISPLAY_PM']) {  ?> 
								<li style="clear:left" class="gateway"><span>Inbox:</span></li>
								<li><span><b><a href="<?php echo (isset($this->_rootref['U_PRIVATEMSGS'])) ? $this->_rootref['U_PRIVATEMSGS'] : ''; ?>"><?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO'] : ''; ?></a></b></span></li>
								<?php } ?>
								<br/>
								<li style="clear:both;white-space:nowrap"><span><!--<a href="#">Select Character</a>--></span></li>
							</ul>
						</div>
						<div id="portrait">
							<div class="shell">
							
								<?php if ($this->_rootref['PBUSER_AVATAR_SRC']) {  ?>
								<table cellspacing="0" cellpadding="0" border="0">
									<tr>
										<td style="background: url('<?php echo (isset($this->_rootref['PBUSER_AVATAR_SRC'])) ? $this->_rootref['PBUSER_AVATAR_SRC'] : ''; ?>'); width: 64px; height: 64px;"></td>
									</tr>
								</table>
								<div class="frame">
								<?php } else if ($this->_rootref['PBPROFILE_RACE']) {  ?><!-- Generate avatar based on custom profile fields -->
								<table cellspacing="0" cellpadding="0" border="0">
									<tr>
										<td style="background: url('<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/portraits/<?php if ($this->_rootref['PBPROFILE_LEVEL']) {  if ($this->_rootref['PBPROFILE_LEVEL'] > (79)) {  ?>wow-80<?php } else if ($this->_rootref['PBPROFILE_LEVEL'] > (69)) {  ?>wow-70<?php } else if ($this->_rootref['PBPROFILE_LEVEL'] > (59)) {  ?>wow<?php } else { ?>wow-default<?php } } else { ?>wow-default<?php } ?>/<?php if ($this->_rootref['PBPROFILE_GENDER']) {  echo (isset($this->_rootref['PBPROFILE_GENDER'])) ? $this->_rootref['PBPROFILE_GENDER'] : ''; } else { ?>0<?php } ?>-<?php echo (isset($this->_rootref['PBPROFILE_RACE'])) ? $this->_rootref['PBPROFILE_RACE'] : ''; ?>-<?php if ($this->_rootref['PBPROFILE_CLASS']) {  echo (isset($this->_rootref['PBPROFILE_CLASS'])) ? $this->_rootref['PBPROFILE_CLASS'] : ''; } else { ?>1<?php } ?>.gif'); width: 64px; height: 64px;"></td>
									</tr>
								</table>
								<!-- / Generate avatar based on custom profile fields -->
								<div class="frame">
								<?php } else { ?>
								<table cellspacing="0" cellpadding="0" border="0">
									<tr>
										<td style="background: none; width: 64px; height: 64px;"></td>
									</tr>
								</table>
								<div class="frame-no-char">
								<?php } ?>
									<a href="<?php echo (isset($this->_rootref['U_PROFILE'])) ? $this->_rootref['U_PROFILE'] : ''; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" width= "82" height="83" border="0" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
					<div id="logoutbuttons">
						<div style="position: relative;">
							<?php if ($this->_rootref['PBUSER_AVATAR_SRC'] || $this->_rootref['PBPROFILE_RACE']) {  ?>
							<div class="iconPosition">
								<?php if ($this->_rootref['PBRANK_IMG_SRC']) {  ?><img src="<?php echo (isset($this->_rootref['PBRANK_IMG_SRC'])) ? $this->_rootref['PBRANK_IMG_SRC'] : ''; ?>" alt="<?php echo (isset($this->_rootref['PBRANK_TITLE'])) ? $this->_rootref['PBRANK_TITLE'] : ''; ?>" /><?php } else { ?><b><small><?php if ($this->_rootref['PBPROFILE_LEVEL']) {  echo (isset($this->_rootref['PBPROFILE_LEVEL'])) ? $this->_rootref['PBPROFILE_LEVEL'] : ''; } else { ?><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/question.gif" alt="" /><?php } ?></small></b> <?php } ?>
							</div>
							<?php } ?>
						</div>
						<ul>
							<li class="left"></li>
							<li><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>" accesskey="l"><div class="pblogout"></div></a></li>
							<li class="mid"></li>
							<li><a href="<?php echo (isset($this->_rootref['U_PROFILE'])) ? $this->_rootref['U_PROFILE'] : ''; ?>" accesskey="u"><div class="pboptions"></div></a></li>
							<li class="right"></li>
						</ul>
					</div>
					
					<?php } else { ?>
					<form action="<?php echo (isset($this->_rootref['PB_LOGIN_ACTION'])) ? $this->_rootref['PB_LOGIN_ACTION'] : ''; ?>" method="post">
					<div id="login">
						<div class="top"></div>
						<div class="textfields">
							<ul class="hdr">
								<li class="title">
									<img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/account.gif" alt="Account"/> </li>
								<li>
									<input type="text" name="username" id="username" class="inputbox" title="<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>" size="16" style="width: 120px;" />
								</li>
							</ul>
							<br clear="all" />
							<ul>
								<li class="title">
									<img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/password.gif" alt="Password" /> </li>
								<li>
									<input type="password" name="password" id="password" class="inputbox" title="<?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>" size="16" style="width: 120px;" />
								</li>
							</ul>
						</div>
					</div>
					<div id="loginbuttons">
						<ul>
							<li class="left"></li>
							<li class="login">
								<input type="submit" name="login" value="&nbsp;" class="pblogin" />
							</li>
							<li class="mid"></li>
							<li class="help"><a href="<?php echo (isset($this->_rootref['U_FAQ'])) ? $this->_rootref['U_FAQ'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_FAQ_EXPLAIN'])) ? $this->_rootref['L_FAQ_EXPLAIN'] : ((isset($user->lang['FAQ_EXPLAIN'])) ? $user->lang['FAQ_EXPLAIN'] : '{ FAQ_EXPLAIN }')); ?>"><div class="pbfaq"></div></a></li>
							<li class="right"></li>
						</ul>
					</div>
					</form>
					<?php } ?>
				</td>
			</tr>
		</table>
	</div>
	<!-- End Login Box -->
	<div class="clear" style="height: 1px;"><a name="start_here"></a></div>
	


	<?php if ($this->_rootref['S_DISPLAY_SEARCH'] && ! $this->_rootref['S_IN_SEARCH']) {  ?>
	<form method="post" id="forum-search" action="<?php echo (isset($this->_rootref['S_SEARCHBOX_ACTION'])) ? $this->_rootref['S_SEARCHBOX_ACTION'] : ''; ?>">
	<?php } ?>
	<div id="search">
		<ul><?php if ($this->_rootref['S_VIEWTOPIC'] || $this->_rootref['S_VIEWFORUM']) {  ?>
			<li class="a"></li>
			<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_DISPLAY_POST_INFO']) {  ?>
			<li style="width:146px"> <a href="<?php echo (isset($this->_rootref['U_POST_NEW_TOPIC'])) ? $this->_rootref['U_POST_NEW_TOPIC'] : ''; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/wrath/forum-menu-newtopic.gif" alt="<?php echo ((isset($this->_rootref['L_POST_NEW_TOPIC'])) ? $this->_rootref['L_POST_NEW_TOPIC'] : ((isset($user->lang['POST_NEW_TOPIC'])) ? $user->lang['POST_NEW_TOPIC'] : '{ POST_NEW_TOPIC }')); ?>" border="0" /></a> <a href="<?php echo (isset($this->_rootref['U_POST_NEW_TOPIC'])) ? $this->_rootref['U_POST_NEW_TOPIC'] : ''; ?>"> <img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/newpost-icon-quill.gif" alt="<?php echo ((isset($this->_rootref['L_POST_NEW_TOPIC'])) ? $this->_rootref['L_POST_NEW_TOPIC'] : ((isset($user->lang['POST_NEW_TOPIC'])) ? $user->lang['POST_NEW_TOPIC'] : '{ POST_NEW_TOPIC }')); ?>" width="33" height="35" border="0" class="quicksearch-newtopic" /> </a> </li>
			<?php } else { ?>
			<li style="width:146px"> <img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/wrath/forum-menu-newtopic-inactive.gif" alt="<?php echo ((isset($this->_rootref['L_POST_NEW_TOPIC'])) ? $this->_rootref['L_POST_NEW_TOPIC'] : ((isset($user->lang['POST_NEW_TOPIC'])) ? $user->lang['POST_NEW_TOPIC'] : '{ POST_NEW_TOPIC }')); ?>" border="0" /> <img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/newpost-icon-quill-inactive.gif" alt="<?php echo ((isset($this->_rootref['L_POST_NEW_TOPIC'])) ? $this->_rootref['L_POST_NEW_TOPIC'] : ((isset($user->lang['POST_NEW_TOPIC'])) ? $user->lang['POST_NEW_TOPIC'] : '{ POST_NEW_TOPIC }')); ?>" width="33" height="35" border="0" class="quicksearch-newtopic" /> </li>
			<?php } ?>
			<li><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/themes/wrath/forum-menu-mid.gif" alt="" width="19" height="39" border="0" /><!--<div class="pbsearch-menumid"></div>--></li>
			<?php } if ($this->_rootref['S_DISPLAY_SEARCH'] && ! $this->_rootref['S_IN_SEARCH']) {  if ($this->_rootref['S_DISPLAY_SEARCHBOX']) {  ?>
			<li><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/themes/wrath/forum-menu-search-left.gif" alt="" width="12" height="39" border="0" /><!--<div class="pbsearch-left"></div>--> <img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/forum-menu-quicksearch.gif" alt="Quick Search" width="85" height="17" border="0" style="position: absolute; top: -6px;" id="forum-menu-quicksearch" />
				<div class="advanced-search"> <a class="pbsearch-adv" href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>"> <img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" alt="<?php echo ((isset($this->_rootref['L_SEARCH_ADV_EXPLAIN'])) ? $this->_rootref['L_SEARCH_ADV_EXPLAIN'] : ((isset($user->lang['SEARCH_ADV_EXPLAIN'])) ? $user->lang['SEARCH_ADV_EXPLAIN'] : '{ SEARCH_ADV_EXPLAIN }')); ?>" title="<?php echo ((isset($this->_rootref['L_SEARCH_ADV'])) ? $this->_rootref['L_SEARCH_ADV'] : ((isset($user->lang['SEARCH_ADV'])) ? $user->lang['SEARCH_ADV'] : '{ SEARCH_ADV }')); ?>" width="107" height="15" border="0" /> </a> </div>
			</li>
			<li class="b">
				<input class="inputbox search tiny" type="text" name="keywords" id="search_keywords" size="20" value="&nbsp;" onclick="if (this.value == '<?php echo ((isset($this->_rootref['LA_SEARCH_FORUM'])) ? $this->_rootref['LA_SEARCH_FORUM'] : ((isset($this->_rootref['L_SEARCH_FORUM'])) ? addslashes($this->_rootref['L_SEARCH_FORUM']) : ((isset($user->lang['SEARCH_FORUM'])) ? addslashes($user->lang['SEARCH_FORUM']) : '{ SEARCH_FORUM }'))); ?>') this.value = '';" onblur="" />
			</li>
			<li>
				<input type="submit" id="pbsearch-search" value="&nbsp;" class="button" title="Search" />
				<input type="hidden" value="<?php echo (isset($this->_rootref['FORUM_ID'])) ? $this->_rootref['FORUM_ID'] : ''; ?>" name="fid[]" />
			</li>
			<li class="c"></li>
			<?php } } ?>
		</ul>
		<?php if (! $this->_rootref['S_VIEWFORUM']) {  ?>
			<div class="forum-index" id="forum-index"><?php if ($this->_rootref['S_IN_UCP']) {  ?><a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>"><?php } else { ?><a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>"><?php } ?><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/forum-index.gif" width="104" height="41" border="0" alt="<?php echo ((isset($this->_rootref['L_RETURN_TO'])) ? $this->_rootref['L_RETURN_TO'] : ((isset($user->lang['RETURN_TO'])) ? $user->lang['RETURN_TO'] : '{ RETURN_TO }')); ?> <?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?>" /> </a> </div>
		<?php } ?>
	</div>
	<?php if ($this->_rootref['S_DISPLAY_SEARCH'] && ! $this->_rootref['S_IN_SEARCH']) {  ?>
	</form>
	<?php } ?>

</div>

<!--[if gt IE 6]>
<div class="ie7margin"></div>
<![endif]-->