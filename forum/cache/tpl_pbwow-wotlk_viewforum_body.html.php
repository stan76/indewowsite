<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); $this->_tpl_include('pbwow_header.html'); if (! $this->_rootref['S_HAS_SUBFORUM'] || $this->_rootref['S_IS_POSTABLE']) {  ?>

<table cellspacing="0" cellpadding="1" border="0" width="100%" class="board-clear">
	<tr>
		<td class="tableoutline<?php if ($this->_rootref['S_HAS_SUBFORUM'] || $this->_rootref['S_PBWOW_ADS_TOP']) {  ?> adbg<?php } ?>">
		
			<?php if ($this->_rootref['S_HAS_SUBFORUM']) {  ?>
			<div style="width:100%;" align="center">
				<div class="indexing" style="width:700px; padding:3px;" align="left">
				<?php $this->_tpl_include('forumlist_body.html'); if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_FORUMS']) {  ?>
					<div style="width:100%; text-align:center; padding:5px;"><a href="<?php echo (isset($this->_rootref['U_MARK_FORUMS'])) ? $this->_rootref['U_MARK_FORUMS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MARK_FORUMS_READ'])) ? $this->_rootref['L_MARK_FORUMS_READ'] : ((isset($user->lang['MARK_FORUMS_READ'])) ? $user->lang['MARK_FORUMS_READ'] : '{ MARK_FORUMS_READ }')); ?></a></div>
				<?php } ?>
				</div>
			</div>
			<?php } if ($this->_rootref['S_PBWOW_ADS_TOP'] && ! $this->_rootref['S_HAS_SUBFORUM']) {  ?>
			<center>
				<div id="ad_728x90" style="margin-bottom:12px; margin-top:10px; padding: 1px; width:728px; background:#1E1E1E none repeat scroll right center;">
					<?php if ($this->_rootref['S_PBWOW_IE6MESSAGE']) {  echo (isset($this->_rootref['PBWOW_IE6MESSAGE_CODE'])) ? $this->_rootref['PBWOW_IE6MESSAGE_CODE'] : ''; } ?>
					<?php echo (isset($this->_rootref['PBWOW_ADS_TOP_CODE'])) ? $this->_rootref['PBWOW_ADS_TOP_CODE'] : ''; ?>
				</div>
			</center>
			<?php } ?>

			<table cellspacing="0" cellpadding="0" border="0" width="100%" class="tableoutline">
				<tr>
					<td>
						<div class="theader">
							<div class="lpage"> <span>
								<?php if ($this->_rootref['S_DISPLAY_POST_INFO'] || $this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_POSTS'] || $this->_rootref['TOTAL_TOPICS']) {  $this->_tpl_include('pbwow_pagination.html'); } ?>									
							</span> </div>
							<div class="rpage" style="width: 500px">
								<ul>
									<li>
									<?php if ($this->_rootref['S_SELECT_SORT_DAYS'] && ! $this->_rootref['S_DISPLAY_ACTIVE']) {  ?>
										<form method="post" class="gray" action="<?php echo (isset($this->_rootref['S_FORUM_ACTION'])) ? $this->_rootref['S_FORUM_ACTION'] : ''; ?>">
											<?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?> <input type="submit" name="sort" value="&nbsp;" style="height:19px; width:21px; background:url(<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/jump-button.gif) no-repeat; border:none; cursor:pointer" />
											<!--<?php echo ((isset($this->_rootref['L_DISPLAY_TOPICS'])) ? $this->_rootref['L_DISPLAY_TOPICS'] : ((isset($user->lang['DISPLAY_TOPICS'])) ? $user->lang['DISPLAY_TOPICS'] : '{ DISPLAY_TOPICS }')); ?>: <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?>-->
										</form>
									<?php } ?>
									</li>
									<li style="margin: 3px 2px 0 3px;"><span><b><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?>:&nbsp;</b></span></li>
								</ul>
							</div>
						</div>


<div id="postbackground">
	<div class="right">
		<table width="97%" style="padding:0 0 0 1%; margin:0 auto; text-align:left;">
			<tr>
				<td valign="top" align="left">
							
					<?php if ($this->_rootref['S_FORUM_RULES']) {  ?>
					<div class="vp-content" style="padding-bottom:20px">
						<table style="width:100%">
							<thead>
								<tr>
									<td>
									<?php if ($this->_rootref['U_FORUM_RULES']) {  ?>
										<a href="<?php echo (isset($this->_rootref['U_FORUM_RULES'])) ? $this->_rootref['U_FORUM_RULES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?></a>
									<?php } else { ?>
										<?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?>
									<?php } ?>
									</td>
								</tr>
							</thead>
							<?php if (! $this->_rootref['U_FORUM_RULES']) {  ?>
							<tbody>
								<tr class="r0">
									<td>
										<?php echo (isset($this->_rootref['FORUM_RULES'])) ? $this->_rootref['FORUM_RULES'] : ''; ?>
									</td>
								</tr>
							</tbody>
							<?php } ?>
						</table>
					</div>
					<?php } ?>

					<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableoutline" style="margin: 0 auto;">
						<tr>
							<td class="tableheader" style="text-align: center;"><?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_TOPICS']) {  ?><a href="<?php echo (isset($this->_rootref['U_MARK_TOPICS'])) ? $this->_rootref['U_MARK_TOPICS'] : ''; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/flag.gif" border="0" width="18" height="13" alt="<?php echo ((isset($this->_rootref['L_MARK_TOPICS_READ'])) ? $this->_rootref['L_MARK_TOPICS_READ'] : ((isset($user->lang['MARK_TOPICS_READ'])) ? $user->lang['MARK_TOPICS_READ'] : '{ MARK_TOPICS_READ }')); ?>" title="<?php echo ((isset($this->_rootref['L_MARK_TOPICS_READ'])) ? $this->_rootref['L_MARK_TOPICS_READ'] : ((isset($user->lang['MARK_TOPICS_READ'])) ? $user->lang['MARK_TOPICS_READ'] : '{ MARK_TOPICS_READ }')); ?>" /></a><?php } else { ?><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/flag.gif" border="0" width="18" height="13" alt="" title="Flags" /><?php } ?></td>
							<td class="tableheader">
								<table cellspacing="0" cellpadding="0" border="0">
									<tr>
										<td><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" border="0" width="1" height="22" alt="" /></td>
										<td style="padding: 0 0 0 5px;"><span> <a class="filter" href="#"><?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?></a></span></td>
									</tr>
								</table>
							</td>
							<td align="center" class="tableheader"><span> <a class="filter" href="#"><?php echo ((isset($this->_rootref['L_AUTHOR'])) ? $this->_rootref['L_AUTHOR'] : ((isset($user->lang['AUTHOR'])) ? $user->lang['AUTHOR'] : '{ AUTHOR }')); ?></a></span></td>
							<td align="center" class="tableheader"><span> <a class="filter" href="#"><?php echo ((isset($this->_rootref['L_REPLIES'])) ? $this->_rootref['L_REPLIES'] : ((isset($user->lang['REPLIES'])) ? $user->lang['REPLIES'] : '{ REPLIES }')); ?></a></span></td>
							<td align="center" class="tableheader"><span> <a class="filter" href="#"><?php echo ((isset($this->_rootref['L_VIEWS'])) ? $this->_rootref['L_VIEWS'] : ((isset($user->lang['VIEWS'])) ? $user->lang['VIEWS'] : '{ VIEWS }')); ?></a></span></td>
							<?php if (! $this->_rootref['S_IS_BOT']) {  ?><td align="center" class="tableheader"><span> <a class="filter" href="#"><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></a></span></td><?php } ?>
						</tr>


						<?php $_topicrow_count = (isset($this->_tpldata['topicrow'])) ? sizeof($this->_tpldata['topicrow']) : 0;if ($_topicrow_count) {for ($_topicrow_i = 0; $_topicrow_i < $_topicrow_count; ++$_topicrow_i){$_topicrow_val = &$this->_tpldata['topicrow'][$_topicrow_i]; ?>

						<tr class="rows">
							<?php if (!($_topicrow_val['S_ROW_COUNT'] & 1)  ) {  ?>
							<td style="width:120px;" class="na1">
							<?php } else { ?>
							<td style="width:120px;" class="n1">
							<?php } if ($_topicrow_val['S_POST_STICKY'] || $_topicrow_val['S_POST_ANNOUNCE']) {  ?>
								<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/sticky.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_POST_STICKY'])) ? $this->_rootref['L_POST_STICKY'] : ((isset($user->lang['POST_STICKY'])) ? $user->lang['POST_STICKY'] : '{ POST_STICKY }')); ?>" title="<?php echo ((isset($this->_rootref['L_POST_STICKY'])) ? $this->_rootref['L_POST_STICKY'] : ((isset($user->lang['POST_STICKY'])) ? $user->lang['POST_STICKY'] : '{ POST_STICKY }')); ?>" /> 
								<?php } else if ($_topicrow_val['S_POST_GLOBAL']) {  ?>
								<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/sticky_b.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_VIEW_TOPIC_GLOBAL'])) ? $this->_rootref['L_VIEW_TOPIC_GLOBAL'] : ((isset($user->lang['VIEW_TOPIC_GLOBAL'])) ? $user->lang['VIEW_TOPIC_GLOBAL'] : '{ VIEW_TOPIC_GLOBAL }')); ?>" title="<?php echo ((isset($this->_rootref['L_VIEW_TOPIC_GLOBAL'])) ? $this->_rootref['L_VIEW_TOPIC_GLOBAL'] : ((isset($user->lang['VIEW_TOPIC_GLOBAL'])) ? $user->lang['VIEW_TOPIC_GLOBAL'] : '{ VIEW_TOPIC_GLOBAL }')); ?>" /> 
								<?php } else { ?>
								<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" border="0" width="22" height="15" alt="" /> 
								<?php } if ($_topicrow_val['S_TOPIC_LOCKED']) {  ?>
								<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/lock-icon.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_TOPIC_LOCKED_SHORT'])) ? $this->_rootref['L_TOPIC_LOCKED_SHORT'] : ((isset($user->lang['TOPIC_LOCKED_SHORT'])) ? $user->lang['TOPIC_LOCKED_SHORT'] : '{ TOPIC_LOCKED_SHORT }')); ?>" title="<?php echo ((isset($this->_rootref['L_TOPIC_LOCKED_SHORT'])) ? $this->_rootref['L_TOPIC_LOCKED_SHORT'] : ((isset($user->lang['TOPIC_LOCKED_SHORT'])) ? $user->lang['TOPIC_LOCKED_SHORT'] : '{ TOPIC_LOCKED_SHORT }')); ?>" /> 
								<?php } else { ?>
								<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" border="0" width="15" height="16" alt="" /> 
								<?php } if ($_topicrow_val['S_HAS_POLL']) {  ?>
								<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/poll.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_POLL_QUESTION'])) ? $this->_rootref['L_POLL_QUESTION'] : ((isset($user->lang['POLL_QUESTION'])) ? $user->lang['POLL_QUESTION'] : '{ POLL_QUESTION }')); ?>" title="<?php echo ((isset($this->_rootref['L_POLL_QUESTION'])) ? $this->_rootref['L_POLL_QUESTION'] : ((isset($user->lang['POLL_QUESTION'])) ? $user->lang['POLL_QUESTION'] : '{ POLL_QUESTION }')); ?>" /> 
								<?php } else { ?>
								<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" border="0" width="20" height="17" alt="" /> 
								<?php } if ($_topicrow_val['S_POST_ANNOUNCE'] || $_topicrow_val['S_POST_GLOBAL']) {  ?>
								<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/blizz.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_ANNOUNCEMENTS'])) ? $this->_rootref['L_ANNOUNCEMENTS'] : ((isset($user->lang['ANNOUNCEMENTS'])) ? $user->lang['ANNOUNCEMENTS'] : '{ ANNOUNCEMENTS }')); ?>" title="<?php echo ((isset($this->_rootref['L_ANNOUNCEMENTS'])) ? $this->_rootref['L_ANNOUNCEMENTS'] : ((isset($user->lang['ANNOUNCEMENTS'])) ? $user->lang['ANNOUNCEMENTS'] : '{ ANNOUNCEMENTS }')); ?>" />
								<?php } else { ?>
								<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" border="0" width="22" height="15" alt="" /> 
								<?php } if ($_topicrow_val['S_TOPIC_MOVED']) {  ?>
								<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/arrow.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_TOPIC_MOVED'])) ? $this->_rootref['L_TOPIC_MOVED'] : ((isset($user->lang['TOPIC_MOVED'])) ? $user->lang['TOPIC_MOVED'] : '{ TOPIC_MOVED }')); ?>" title="<?php echo ((isset($this->_rootref['L_TOPIC_MOVED'])) ? $this->_rootref['L_TOPIC_MOVED'] : ((isset($user->lang['TOPIC_MOVED'])) ? $user->lang['TOPIC_MOVED'] : '{ TOPIC_MOVED }')); ?>" /> 
								<?php } else { ?>
								<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" border="0" width="17" height="11" alt="" /> 
								<?php } ?>
							</td>
							<?php if (!($_topicrow_val['S_ROW_COUNT'] & 1)  ) {  ?>
							<td class="ta2">
							<?php } else { ?>
							<td class="t2">
							<?php } if ($_topicrow_val['S_TOPIC_UNAPPROVED'] || $_topicrow_val['S_POSTS_UNAPPROVED'] || $_topicrow_val['S_TOPIC_REPORTED'] || $_topicrow_val['ATTACH_ICON_IMG']) {  ?>
									<div style="float:right; display:inline">
								<?php if ($_topicrow_val['S_TOPIC_UNAPPROVED'] || $_topicrow_val['S_POSTS_UNAPPROVED']) {  ?><a href="<?php echo $_topicrow_val['U_MCP_QUEUE']; ?>"><?php echo $_topicrow_val['UNAPPROVED_IMG']; ?></a>&nbsp;<?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?><a href="<?php echo $_topicrow_val['U_MCP_REPORT']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/biohazard-button.gif" border="0" /></a>&nbsp;<?php } if ($_topicrow_val['ATTACH_ICON_IMG']) {  ?><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/icon_topic_attach.gif" border="0" />&nbsp;<?php } ?>
									</div>	
								<?php } if ($_topicrow_val['S_UNREAD_TOPIC']) {  ?>
								<a href="<?php echo $_topicrow_val['U_NEWEST_POST']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/square-new.gif" width="15" height="15" style="vertical-align:middle;" border="0" alt="" /></a>
								<?php } else if ($_topicrow_val['S_USER_POSTED']) {  ?>
								<a href="<?php echo $_topicrow_val['U_NEWEST_POST']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/square.gif" width="15" height="15" style="vertical-align:middle;" border="0" alt="" /></a>
								<?php } else { ?>
								<a href="<?php echo $_topicrow_val['U_NEWEST_POST']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/square-grey.gif" width="15" height="15" style="vertical-align:middle;" border="0" alt="" /></a>
								<?php } ?>
								<a href="<?php echo $_topicrow_val['U_VIEW_TOPIC']; ?>" class="active"><?php echo $_topicrow_val['TOPIC_TITLE']; ?></a>
								<?php if ($_topicrow_val['PAGINATION']) {  ?>
									<small>[Page: <?php echo $_topicrow_val['PAGINATION']; ?></small>] 
								<?php } ?>
								
							</td>
							<?php if (!($_topicrow_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="ta3" style="white-space:nowrap">
							<?php } else { ?><td class="t3" style="white-space:nowrap"><?php } if ($_topicrow_val['U_TOPIC_AUTHOR']) {  if ($_topicrow_val['TOPIC_AUTHOR_COLOUR']) {  ?><a href="<?php echo $_topicrow_val['U_TOPIC_AUTHOR']; ?>" style="text-decoration:none; color:<?php echo $_topicrow_val['TOPIC_AUTHOR_COLOUR']; ?>"><?php } else { ?><a href="<?php echo $_topicrow_val['U_TOPIC_AUTHOR']; ?>" style="text-decoration:none; color:#d7cea4"><?php } echo $_topicrow_val['TOPIC_AUTHOR']; ?></a><?php } else { echo $_topicrow_val['TOPIC_AUTHOR']; } ?>&nbsp;<?php if ($_topicrow_val['TOPIC_AUTHOR_RANK_IMG']) {  echo $_topicrow_val['TOPIC_AUTHOR_RANK_IMG']; } ?></td>
							<?php if (!($_topicrow_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="ta4">
							<?php } else { ?><td class="t4"><?php } echo $_topicrow_val['REPLIES']; ?></td>
							<?php if (!($_topicrow_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="ta5">
							<?php } else { ?><td class="t5"><?php } echo $_topicrow_val['VIEWS']; ?></td>
							<?php if (! $this->_rootref['S_IS_BOT']) {  if (!($_topicrow_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="ta6" style="white-space: nowrap">
							<?php } else { ?><td class="t6" style="white-space: nowrap" ><?php } echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?>&nbsp;<b><?php if ($_topicrow_val['U_LAST_POST_AUTHOR']) {  ?><a href="<?php echo $_topicrow_val['U_LAST_POST_AUTHOR']; ?>" style="text-decoration:none; color:#d7cea4"><?php echo $_topicrow_val['LAST_POST_AUTHOR']; ?></a><?php } else { echo $_topicrow_val['LAST_POST_AUTHOR']; } ?></b></td>
							<?php } ?>
						</tr>
						
						<?php }} else { if ($this->_rootref['S_IS_POSTABLE']) {  ?>
						<tr class="rows" style="height:30px">
							<td class="ta5" colspan="6">
							<span style="color:#FFFFFF;"><strong><?php echo ((isset($this->_rootref['L_NO_TOPICS'])) ? $this->_rootref['L_NO_TOPICS'] : ((isset($user->lang['NO_TOPICS'])) ? $user->lang['NO_TOPICS'] : '{ NO_TOPICS }')); ?></strong></span>
							</td>
						</tr>
						<?php } } if ($this->_rootref['S_NO_READ_ACCESS']) {  ?>
						<tr class="rows" style="height:30px">
							<td class="ta5" colspan="6">
							<span style="color:#FF0000;"><strong><?php echo ((isset($this->_rootref['L_NO_READ_ACCESS'])) ? $this->_rootref['L_NO_READ_ACCESS'] : ((isset($user->lang['NO_READ_ACCESS'])) ? $user->lang['NO_READ_ACCESS'] : '{ NO_READ_ACCESS }')); ?></strong></span>
							</td>
						</tr>
						<?php } ?>

					</table>
				</td>
				<?php if ($this->_rootref['S_PBWOW_ADS_SIDE']) {  ?>
				<td width="130px" valign="top" align="center">
					<div style="width:160px; height:600px; padding:1px;margin:4px 0 0 0; background:#1E1E1E none repeat scroll center bottom;">
						<div id="ad_160x600" style="width:160px; height:12px; text-align:center">
							<?php echo (isset($this->_rootref['PBWOW_ADS_SIDE_CODE'])) ? $this->_rootref['PBWOW_ADS_SIDE_CODE'] : ''; ?>
						</div>
					</div>
				</td>
				<?php } ?>
			</tr>
		</table>
	</div>
</div>
						<div class="theader">
							<div class="lpage">
								<?php if ($this->_rootref['S_DISPLAY_POST_INFO'] || $this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_POSTS'] || $this->_rootref['TOTAL_TOPICS']) {  $this->_tpl_include('pbwow_pagination.html'); } ?>	
							</div>
						</div>
						<div class="tbottom"></div>
						<?php $this->_tpl_include('pbwow_jumpbox.html'); ?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>


	
<div align="center" style="padding:10px;">
	<span><b><?php echo ((isset($this->_rootref['L_LEGEND'])) ? $this->_rootref['L_LEGEND'] : ((isset($user->lang['LEGEND'])) ? $user->lang['LEGEND'] : '{ LEGEND }')); ?></b> [ <a href="<?php echo (isset($this->_rootref['U_FAQ'])) ? $this->_rootref['U_FAQ'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_FAQ_EXPLAIN'])) ? $this->_rootref['L_FAQ_EXPLAIN'] : ((isset($user->lang['FAQ_EXPLAIN'])) ? $user->lang['FAQ_EXPLAIN'] : '{ FAQ_EXPLAIN }')); ?>">More Details</a> ]</span>
	<table cellspacing="0" cellpadding="0" id="iconLegend">
		<tr>
			<td>
				<table class="tb2" width="100%" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/square.gif" style="margin: 0 3px 0 2px;" border="0" alt="Unviewed Post" /><small>&nbsp;<?php echo ((isset($this->_rootref['L_SEARCH_SELF'])) ? $this->_rootref['L_SEARCH_SELF'] : ((isset($user->lang['SEARCH_SELF'])) ? $user->lang['SEARCH_SELF'] : '{ SEARCH_SELF }')); ?></small></td>
						<td><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/square-grey.gif" border="0" alt="Viewed Post" /><small>&nbsp;<?php echo ((isset($this->_rootref['L_NO_NEW_POSTS'])) ? $this->_rootref['L_NO_NEW_POSTS'] : ((isset($user->lang['NO_NEW_POSTS'])) ? $user->lang['NO_NEW_POSTS'] : '{ NO_NEW_POSTS }')); ?></small></td>
						<td><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/square-new.gif" style="margin: 0 3px 0 2px;" border="0" alt="New Post" /><small>&nbsp;<?php echo ((isset($this->_rootref['L_NEW_POSTS'])) ? $this->_rootref['L_NEW_POSTS'] : ((isset($user->lang['NEW_POSTS'])) ? $user->lang['NEW_POSTS'] : '{ NEW_POSTS }')); ?></small></td>
						<td><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/arrow.gif" style="margin: 0 3px 0 2px;" border="0" alt="<?php echo ((isset($this->_rootref['L_TOPIC_MOVED'])) ? $this->_rootref['L_TOPIC_MOVED'] : ((isset($user->lang['TOPIC_MOVED'])) ? $user->lang['TOPIC_MOVED'] : '{ TOPIC_MOVED }')); ?>" /><small>&nbsp;<?php echo ((isset($this->_rootref['L_TOPIC_MOVED'])) ? $this->_rootref['L_TOPIC_MOVED'] : ((isset($user->lang['TOPIC_MOVED'])) ? $user->lang['TOPIC_MOVED'] : '{ TOPIC_MOVED }')); ?></small></td>
					</tr>
					<tr>
						<td><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/sticky.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_POST_STICKY'])) ? $this->_rootref['L_POST_STICKY'] : ((isset($user->lang['POST_STICKY'])) ? $user->lang['POST_STICKY'] : '{ POST_STICKY }')); ?>" /><small>&nbsp;<?php echo ((isset($this->_rootref['L_POST_STICKY'])) ? $this->_rootref['L_POST_STICKY'] : ((isset($user->lang['POST_STICKY'])) ? $user->lang['POST_STICKY'] : '{ POST_STICKY }')); ?></small></td>
						<td><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/lock-icon.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_TOPIC_LOCKED_SHORT'])) ? $this->_rootref['L_TOPIC_LOCKED_SHORT'] : ((isset($user->lang['TOPIC_LOCKED_SHORT'])) ? $user->lang['TOPIC_LOCKED_SHORT'] : '{ TOPIC_LOCKED_SHORT }')); ?>" /><small>&nbsp;<?php echo ((isset($this->_rootref['L_TOPIC_LOCKED_SHORT'])) ? $this->_rootref['L_TOPIC_LOCKED_SHORT'] : ((isset($user->lang['TOPIC_LOCKED_SHORT'])) ? $user->lang['TOPIC_LOCKED_SHORT'] : '{ TOPIC_LOCKED_SHORT }')); ?></small></td>			 
						<td><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/poll.gif" style="margin: 0 3px 0 2px;" border="0" alt="<?php echo ((isset($this->_rootref['L_POLL_QUESTION'])) ? $this->_rootref['L_POLL_QUESTION'] : ((isset($user->lang['POLL_QUESTION'])) ? $user->lang['POLL_QUESTION'] : '{ POLL_QUESTION }')); ?>" /><small>&nbsp;<?php echo ((isset($this->_rootref['L_VIEW_TOPIC_POLL'])) ? $this->_rootref['L_VIEW_TOPIC_POLL'] : ((isset($user->lang['VIEW_TOPIC_POLL'])) ? $user->lang['VIEW_TOPIC_POLL'] : '{ VIEW_TOPIC_POLL }')); ?></small></td>			
						<td><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/blizz.gif" border="0" alt="Blizzard Rep" /><small>&nbsp;<?php echo ((isset($this->_rootref['L_ANNOUNCEMENTS'])) ? $this->_rootref['L_ANNOUNCEMENTS'] : ((isset($user->lang['ANNOUNCEMENTS'])) ? $user->lang['ANNOUNCEMENTS'] : '{ ANNOUNCEMENTS }')); ?></small></td>
					</tr>
					<?php if ($this->_rootref['MODERATORS']) {  ?>
					<tr>
						<td style="padding:10px; text-align:center" colspan="4">
							<span><b><?php if ($this->_rootref['S_SINGLE_MODERATOR']) {  echo ((isset($this->_rootref['L_MODERATOR'])) ? $this->_rootref['L_MODERATOR'] : ((isset($user->lang['MODERATOR'])) ? $user->lang['MODERATOR'] : '{ MODERATOR }')); } else { echo ((isset($this->_rootref['L_MODERATORS'])) ? $this->_rootref['L_MODERATORS'] : ((isset($user->lang['MODERATORS'])) ? $user->lang['MODERATORS'] : '{ MODERATORS }')); } ?>:</b> <?php echo (isset($this->_rootref['MODERATORS'])) ? $this->_rootref['MODERATORS'] : ''; ?></span>
						</td>
					</tr>
					<?php } ?>
				</table>
			</td>
		</tr>
	</table>
</div>

<?php } else { ?>
<div class="tbottom"></div>
<?php } $this->_tpl_include('overall_footer.html'); ?>