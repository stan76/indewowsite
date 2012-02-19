<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); $this->_tpl_include('pbwow_header.html'); ?>

<table cellspacing="0" cellpadding="1" border="0" width="100%" class="board-clear">
	<tr>
		<td class="tableoutline adbg">
			<?php if ($this->_rootref['S_PBWOW_ADS_TOP']) {  ?>
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
							<div class="lpage-thread">
								<div id="topicview" style="font-weight: normal;">
									<ul>
										<?php if ($this->_rootref['S_POST_ANNOUNCE']) {  ?><li><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/blizz.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_ANNOUNCEMENTS'])) ? $this->_rootref['L_ANNOUNCEMENTS'] : ((isset($user->lang['ANNOUNCEMENTS'])) ? $user->lang['ANNOUNCEMENTS'] : '{ ANNOUNCEMENTS }')); ?>" /></li><?php } if ($this->_rootref['S_IS_LOCKED']) {  ?>
											<li><span><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/lock-icon.gif" width="15" height="16" border="0" alt= "<?php echo ((isset($this->_rootref['L_TOPIC_LOCKED_SHORT'])) ? $this->_rootref['L_TOPIC_LOCKED_SHORT'] : ((isset($user->lang['TOPIC_LOCKED_SHORT'])) ? $user->lang['TOPIC_LOCKED_SHORT'] : '{ TOPIC_LOCKED_SHORT }')); ?>" /></span></li>
										<?php } else { ?>
											<li><span><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/index-icon.gif" width="14" height="15" border="0" alt= "" /></span></li>
										<?php } if ($this->_rootref['S_POST_STICKY'] || $this->_rootref['S_POST_ANNOUNCE']) {  ?><li><span><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/sticky.gif" width="22" height="15" border="0" alt= "" /></span></li><?php } ?>
										<li><span class="white"><b>&nbsp;Topic&nbsp;<a href="<?php echo (isset($this->_rootref['U_VIEW_TOPIC'])) ? $this->_rootref['U_VIEW_TOPIC'] : ''; ?>"><?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?></a></b></span></li>
										<li><span class="white"><small>&nbsp; | &nbsp;<?php echo (isset($this->_rootref['CURRENT_TIME_CLEAN'])) ? $this->_rootref['CURRENT_TIME_CLEAN'] : ''; ?>&nbsp;</small></span></li>
									</ul>
								</div>
							</div>
							<div class="rpage-thread">
								<?php if ($this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_POSTS']) {  $this->_tpl_include('pbwow_pagination.html'); } ?>
							</div>
						</div>
						<div id="postbackground">
							<div class="right">

<?php if ($this->_rootref['S_HAS_POLL']) {  ?>
<div id = "postshell11">
	<div class = "resultbox">
		<div class="postdisplay">
			<div class = "innerborder">
				<div class = "postingcontainer11">
					<div class="postdiv11">
						<div class="deco-frame">
							<div class="deco-frame-right">
								<div class="deco-frame-left">
									<form method="post" action="<?php echo (isset($this->_rootref['S_POLL_ACTION'])) ? $this->_rootref['S_POLL_ACTION'] : ''; ?>">
										<h2><span>Polls</span></h2>
										<?php if ($this->_rootref['S_CAN_VOTE']) {  ?><img class="poll-result-icon" src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/poll-open.gif" alt=""/><?php } else { ?><img class="poll-result-icon" src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/poll-private.gif" alt=""/><?php } ?>
										<div class="polls">
											<div class="poll-date">
												<div class="poll-date1">
													<div class="poll-date2"><?php if ($this->_rootref['L_POLL_LENGTH']) {  echo ((isset($this->_rootref['L_TIME'])) ? $this->_rootref['L_TIME'] : ((isset($user->lang['TIME'])) ? $user->lang['TIME'] : '{ TIME }')); ?>:<span> <?php echo ((isset($this->_rootref['L_POLL_LENGTH'])) ? $this->_rootref['L_POLL_LENGTH'] : ((isset($user->lang['POLL_LENGTH'])) ? $user->lang['POLL_LENGTH'] : '{ POLL_LENGTH }')); ?></span> | <?php } echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?>: <span><?php echo ((isset($this->_rootref['L_MAX_VOTES'])) ? $this->_rootref['L_MAX_VOTES'] : ((isset($user->lang['MAX_VOTES'])) ? $user->lang['MAX_VOTES'] : '{ MAX_VOTES }')); ?></span></div>
												</div>
											</div>
											<div style="clear: both; height: 1px;"></div>
											<h1><?php echo ((isset($this->_rootref['L_VIEW_TOPIC_POLL'])) ? $this->_rootref['L_VIEW_TOPIC_POLL'] : ((isset($user->lang['VIEW_TOPIC_POLL'])) ? $user->lang['VIEW_TOPIC_POLL'] : '{ VIEW_TOPIC_POLL }')); ?> <span>"<?php echo (isset($this->_rootref['POLL_QUESTION'])) ? $this->_rootref['POLL_QUESTION'] : ''; ?>"</span></h1>
											<div class="df">
												<h3><span><?php echo ((isset($this->_rootref['L_VIEW_RESULTS'])) ? $this->_rootref['L_VIEW_RESULTS'] : ((isset($user->lang['VIEW_RESULTS'])) ? $user->lang['VIEW_RESULTS'] : '{ VIEW_RESULTS }')); ?></span></h3>
												<table>
													<tr>
														<td class="tl"></td>
														<td class="t"></td>
														<td class="tr"></td>
													</tr>
													<tr>
														<td class="l"><q></q></td>
														<td class="bg">
															<div class="poll-content"> <br/>
																																			
																<?php $_poll_option_count = (isset($this->_tpldata['poll_option'])) ? sizeof($this->_tpldata['poll_option']) : 0;if ($_poll_option_count) {for ($_poll_option_i = 0; $_poll_option_i < $_poll_option_count; ++$_poll_option_i){$_poll_option_val = &$this->_tpldata['poll_option'][$_poll_option_i]; ?>
																<div class="poll-box">
																	<div class="poll-option">
																		<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?><span><?php echo ((isset($this->_rootref['L_POLL_VOTED_OPTION'])) ? $this->_rootref['L_POLL_VOTED_OPTION'] : ((isset($user->lang['POLL_VOTED_OPTION'])) ? $user->lang['POLL_VOTED_OPTION'] : '{ POLL_VOTED_OPTION }')); ?>:&nbsp;&nbsp;</span><?php } ?>
																		<?php echo $_poll_option_val['POLL_OPTION_CAPTION']; ?>
																		<span>
																		<?php if ($this->_rootref['S_CAN_VOTE']) {  if ($this->_rootref['S_IS_MULTI_CHOICE']) {  if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?>
																			<input type="checkbox" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" checked="checked" />
																			<?php } else { ?>
																			<input type="checkbox" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" />
																			<?php } } else { if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?>
																			<input type="radio" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" checked="checked" />
																			<?php } else { ?>
																			<input type="radio" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" />
																			<?php } } } if ($this->_rootref['S_DISPLAY_RESULTS']) {  echo $_poll_option_val['POLL_OPTION_RESULT']; ?> votes<?php } ?>
																		</span>
																	</div>
																	<?php if ($this->_rootref['S_DISPLAY_RESULTS']) {  ?>
																	<div class="poll-count">
																		<div class="poll-count-total">
																			<span class="poll-bar" id="pollCount<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>">
																				<span class="pollpercent"><?php echo $_poll_option_val['POLL_OPTION_PERCENT']; ?></span>
																			</span>
																		</div>
																	</div>
																	<script type="text/javascript">document.getElementById('pollCount<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>').style.width = "<?php echo $_poll_option_val['POLL_OPTION_PERCENT']; ?>";</script>
																	<?php } ?>
																</div>
																<?php }} ?>

																<br/>
																<?php if ($this->_rootref['S_DISPLAY_RESULTS']) {  ?>
																<span class="totalvotes"><?php echo ((isset($this->_rootref['L_TOTAL_VOTES'])) ? $this->_rootref['L_TOTAL_VOTES'] : ((isset($user->lang['TOTAL_VOTES'])) ? $user->lang['TOTAL_VOTES'] : '{ TOTAL_VOTES }')); ?>: <?php echo (isset($this->_rootref['TOTAL_VOTES'])) ? $this->_rootref['TOTAL_VOTES'] : ''; ?></span>
																<?php } ?>
															</div>
														</td>
														<td class="r"><q></q></td>
													</tr>
													<tr>
														<td class="bl"></td>
														<td class="b"></td>
														<td class="br"></td>
													</tr>
												</table>
												<div class="pfp">
													<div class="poll-footer"> 
														
														<?php if (! $this->_rootref['S_DISPLAY_RESULTS']) {  ?>
														<a class="result" style="top:20px;" href="<?php echo (isset($this->_rootref['U_VIEW_RESULTS'])) ? $this->_rootref['U_VIEW_RESULTS'] : ''; ?>"><!--<span><?php echo ((isset($this->_rootref['L_VIEW_RESULTS'])) ? $this->_rootref['L_VIEW_RESULTS'] : ((isset($user->lang['VIEW_RESULTS'])) ? $user->lang['VIEW_RESULTS'] : '{ VIEW_RESULTS }')); ?></span>--></a>
														<?php } else { ?>
														<a class="result-inactive" style="top:20px;"><!--<span><?php echo ((isset($this->_rootref['L_VIEW_RESULTS'])) ? $this->_rootref['L_VIEW_RESULTS'] : ((isset($user->lang['VIEW_RESULTS'])) ? $user->lang['VIEW_RESULTS'] : '{ VIEW_RESULTS }')); ?></span>--></a>
														<?php } if ($this->_rootref['S_CAN_VOTE']) {  ?>
														<input type="submit" name="update" value="&nbsp;" style="background:url(<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/button-vote.gif) no-repeat; border:none; width:119px; height:36px; margin-top:20px" />
														<?php } else { ?>
														<a class="vote-link-inactive" style="top:20px;"><!--<span><?php echo ((isset($this->_rootref['L_SUBMIT_VOTE'])) ? $this->_rootref['L_SUBMIT_VOTE'] : ((isset($user->lang['SUBMIT_VOTE'])) ? $user->lang['SUBMIT_VOTE'] : '{ SUBMIT_VOTE }')); ?></span>--></a>
														<?php } ?>
				
													</div>
												</div>
											</div>
										</div>
									<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>
									<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>


<center>
	<table width="97%" style="padding:0 0 0 1%">
		<tr>
			<td valign="top" align="left">




<?php if ($this->_rootref['S_FORUM_RULES']) {  if ($this->_rootref['U_FORUM_RULES']) {  ?>
<div id = "postshell11">
	<div class = "resultbox">
		<div class="postdisplay">
			<div class = "innerborder">
				<div class = "postingcontainer11">
					<div class="postdiv11">
						<table id="posttable11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr class="pberrorcolor">
								<td align="center" width="100%">
									<a href="<?php echo (isset($this->_rootref['U_FORUM_RULES'])) ? $this->_rootref['U_FORUM_RULES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?></a>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } else { ?>
<div id="postshell21">
	<div class="resultbox">
		<div class="postdisplay">
			<div class="innerborder">
				<div class="postingcontainer21">
					<div class="insert">
						<table id="posttable21" cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td class="idbliz21" id="id" rowspan="2">
									<div id="avatarIDX">
										<div id="avatar21">
											<div class="shell">
												<table cellspacing="0" cellpadding="0" border="0">
													<tr>
														<td style="background: url('<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/rules.gif') no-repeat; width: 64px; height: 64px;"></td>
													</tr>
												</table>
												<div class="frame">
													<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" width="82" height="83" border="0" alt="" />
												</div>
											</div>
											<div style="position: relative;">
												<div class="iconPosition">
													<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/warn.gif" alt="" />
												</div>
											</div>													
										</div>
									</div>

									<div style="clear: left;">
										<!--ie-->
									</div>

									<div style="position: relative; width: 200px;">
										<div style="padding-top: 5px;"></div>
										<div class="chardata">
											<span>
												<b style="color:#FFF;">
													<?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?>
												</b>
											</span>
										</div>
									</div>
								</td>
								<td class ="tools21">
									<div id="postid21">
										<ul>
											<li style="display:table-cell;">
												<span class="white">
													<b>&dagger;.&nbsp; <a href="<?php echo (isset($this->_rootref['U_VIEW_TOPIC'])) ? $this->_rootref['U_VIEW_TOPIC'] : ''; ?>"><?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?></a></b>
												</span>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr id="body">
								<td class="message21">
									<table id="postbody21" cellspacing="0" border="0">
										<tr>
											<td>
												<div class="breakWord">
													<div class="message-format">															
														<span style="color:#FF1111">
															<b><?php echo (isset($this->_rootref['FORUM_RULES'])) ? $this->_rootref['FORUM_RULES'] : ''; ?></b>
														</span>
													</div>
												</div>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>
<?php } } $_postrow_count = (isset($this->_tpldata['postrow'])) ? sizeof($this->_tpldata['postrow']) : 0;if ($_postrow_count) {for ($_postrow_i = 0; $_postrow_i < $_postrow_count; ++$_postrow_i){$_postrow_val = &$this->_tpldata['postrow'][$_postrow_i]; if ($_postrow_val['S_FIRST_UNREAD']) {  ?><a id="unread"></a><?php } ?>
<a id="p<?php echo $_postrow_val['POST_ID']; ?>"></a>
<div id="postshell<?php if (($_postrow_val['S_ROW_COUNT'] & 1)  ) {  ?>2<?php } else { ?>1<?php } ?>1">
	<div class="resultbox">
		<div class="postdisplay">
			<div class="innerborder">
				<div class="postingcontainer<?php if (($_postrow_val['S_ROW_COUNT'] & 1)  ) {  ?>2<?php } else { ?>1<?php } ?>1">
					<div class="insert">
						<table id="posttable<?php if (($_postrow_val['S_ROW_COUNT'] & 1)  ) {  ?>2<?php } else { ?>1<?php } ?>1" <?php if ($_postrow_val['RANK_PROPASS'] && $this->_rootref['S_PBWOW_PROPASS_RANKS']) {  ?>class="propass"<?php } ?> cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td class="id<?php if ($_postrow_val['RANK_BLIZZ'] && $this->_rootref['S_PBWOW_BLIZZ_RANKS']) {  ?>bliz<?php } if (($_postrow_val['S_ROW_COUNT'] & 1)  ) {  ?>2<?php } else { ?>1<?php } ?>1" id="id" rowspan="2" <?php if ($_postrow_val['S_IGNORE_POST']) {  ?>style="background-image:none"<?php } ?>>
									<div id="avatarIDX" <?php if ($_postrow_val['S_IGNORE_POST']) {  ?>style="display:none"<?php } ?>>
										<div id="avatar<?php if (($_postrow_val['S_ROW_COUNT'] & 1)  ) {  ?>2<?php } else { ?>1<?php } ?>1">
											<div class="shell">
												<?php if ($_postrow_val['POSTER_AVATAR_SRC']) {  ?>
												<table cellspacing="0" cellpadding="0" border="0">
													<tr>
														<td style="background: url('<?php echo $_postrow_val['POSTER_AVATAR_SRC']; ?>') no-repeat; width: 64px; height: 64px;"></td>
													</tr>
												</table>
												<div class="frame">
												<?php } else if ($_postrow_val['S_PROFILE_PBRACE']) {  ?><!-- Generate avatar based on custom profile fields -->
												<table cellspacing="0" cellpadding="0" border="0">
													<tr>
														<td style="background: url('<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/portraits/<?php if ($_postrow_val['S_PROFILE_PBLEVEL']) {  if ($_postrow_val['PROFILE_PBLEVEL_VALUE'] > (79)) {  ?>wow-80<?php } else if ($_postrow_val['PROFILE_PBLEVEL_VALUE'] > (69)) {  ?>wow-70<?php } else if ($_postrow_val['PROFILE_PBLEVEL_VALUE'] > (59)) {  ?>wow<?php } else { ?>wow-default<?php } } else { ?>wow-default<?php } ?>/<?php if ($_postrow_val['S_PROFILE_PBGENDER']) {  echo $_postrow_val['PROFILE_PBGENDER_ID']; } else { ?>0<?php } ?>-<?php echo $_postrow_val['PROFILE_PBRACE_ID']; ?>-<?php if ($_postrow_val['S_PROFILE_PBCLASS']) {  echo $_postrow_val['PROFILE_PBCLASS_ID']; } else { ?>1<?php } ?>.gif') no-repeat; width: 64px; height: 64px;"></td>
													</tr>
												</table>
												<!-- / Generate avatar based on custom profile fields -->
												<div class="frame">
												<?php } else { if ($_postrow_val['U_POST_AUTHOR']) {  ?>
												<table cellspacing="0" cellpadding="0" border="0">
													<tr>
														<td style="background: none; width: 64px; height: 64px;"></td>
													</tr>
												</table>
												<div class="frame-no-char">
												<?php } else { ?>
												<table cellspacing="0" cellpadding="0" border="0">
													<tr>
														<td style="background: url('<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/avatar.jpg') no-repeat; width: 64px; height: 64px;"></td>
													</tr>
												</table>
												<div class="frame">
												<?php } } if ($_postrow_val['U_POST_AUTHOR']) {  ?><a href="<?php echo $_postrow_val['U_POST_AUTHOR']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" width="82" height="83" border="0" alt="" /></a>
													<?php } else { ?><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" width="82" height="83" border="0" alt="" />
													<?php } ?>
												</div>
											</div>
											<div style="position: relative;">
												<?php if ($_postrow_val['POSTER_AVATAR_SRC'] || $_postrow_val['S_PROFILE_PBRACE']) {  ?>
												<div class="iconPosition">
													<?php if ($_postrow_val['SPECIAL_RANK_IMG']) {  echo $_postrow_val['SPECIAL_RANK_IMG']; } else if ($_postrow_val['S_PROFILE_PBLEVEL'] && $_postrow_val['PROFILE_PBLEVEL_VALUE'] != 0) {  ?><b><small><?php echo $_postrow_val['PROFILE_PBLEVEL_VALUE']; ?></small></b><?php } else if (! $_postrow_val['S_PROFILE_PBRACE'] && $_postrow_val['U_POST_AUTHOR'] && $_postrow_val['RANK_IMG']) {  echo $_postrow_val['RANK_IMG']; } else { ?><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/question.gif" alt="" /><?php } ?>
												</div>
												<?php } else if (! $_postrow_val['U_POST_AUTHOR']) {  ?>
												<div class="iconPosition">
													<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/question.gif" alt="" />
												</div>
												<?php } if (! ( $_postrow_val['RANK_BLIZZ'] && $this->_rootref['S_PBWOW_BLIZZ_RANKS'] ) && $_postrow_val['U_POST_AUTHOR']) {  ?>
												<div id="iconpanelhide<?php if (($_postrow_val['S_ROW_COUNT'] & 1)  ) {  ?>2<?php } else { ?>1<?php } ?>1">
													<?php if ($_postrow_val['S_PROFILE_PBRACE']) {  ?>
													<div id="iconpanel"></div>
													<div id="default-icon-panel">

														<?php if ($_postrow_val['S_PROFILE_PBRACE']) {  if ($_postrow_val['S_PROFILE_PBGENDER']) {  ?>
														<div class="player-icons-race" style="background: url('<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon/race/<?php echo $_postrow_val['PROFILE_PBRACE_ID']; ?>-<?php echo $_postrow_val['PROFILE_PBGENDER_ID']; ?>.gif') no-repeat;"> <img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" height="18" width="18" alt="" /> </div>
														<?php } else { ?>
														<div class="player-icons-race" style="background: url('<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon/race/<?php echo $_postrow_val['PROFILE_PBRACE_ID']; ?>-0.gif') no-repeat;"> <img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" height="18" width="18" alt="" /> </div>
														<?php } } if ($_postrow_val['S_PROFILE_PBCLASS']) {  ?>
														<div class="player-icons-class" style="background: url('<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon/class/<?php echo $_postrow_val['PROFILE_PBCLASS_ID']; ?>.gif') no-repeat;"><?php if ($_postrow_val['S_PROFILE_PBARMORYCHARLINK']) {  ?><a href="<?php echo $_postrow_val['PROFILE_PBARMORYCHARLINK_VALUE']; ?>" target="_blank"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon/icon-active.png" alt="" class="png" border="0" height="18" width="18" /></a><?php } else { ?><img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" height="18" width="18" alt="" /><?php } ?></div>
														<?php } if ($_postrow_val['RANK_IMG']) {  ?>
														<div class="player-icons-pvprank" style="background: url('<?php echo $_postrow_val['RANK_IMG_SRC']; ?>') no-repeat;" title="<?php echo $_postrow_val['RANK_TITLE']; ?>"></div>
														<?php } else { if ($_postrow_val['PROFILE_PBRACE_ID'] == (1) || $_postrow_val['PROFILE_PBRACE_ID'] == (3) || $_postrow_val['PROFILE_PBRACE_ID'] == (4) || $_postrow_val['PROFILE_PBRACE_ID'] == (7) || $_postrow_val['PROFILE_PBRACE_ID'] == (11)) {  ?>
														<div class="player-icons-pvprank" style="background: url('<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon/pvpranks/rank_default_0.gif') no-repeat;"></div>
														<?php } else { ?>
														<div class="player-icons-pvprank" style="background: url('<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon/pvpranks/rank_default_1.gif') no-repeat;"></div>
														<?php } } ?>

													</div>
													<?php } ?>	
												</div>
												<?php } ?>
											</div>													
										</div><!-- avatar -->
									</div><!-- avatarIDX --><?php if ($_postrow_val['U_POST_AUTHOR']) {  ?>
									<div style="position: relative; width: 200px;">
										<div id="userpanel" class="userpanel" <?php if ($_postrow_val['S_IGNORE_POST']) {  ?>style="top:-4px"<?php } ?>>
											<a href="<?php echo $_postrow_val['U_SEARCH']; ?>"><img class="icon-search" src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/search.gif" alt="view posts by this user" /></a>
											<?php if ($_postrow_val['S_ONLINE'] && ! $_postrow_val['S_IGNORE_POST']) {  ?>
											<img class="icon-ignore" src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/unignore-user.gif" id="ignore" alt="<?php echo ((isset($this->_rootref['L_ONLINE'])) ? $this->_rootref['L_ONLINE'] : ((isset($user->lang['ONLINE'])) ? $user->lang['ONLINE'] : '{ ONLINE }')); ?>" />
											<?php } else { ?>
											<img class="icon-ignore" src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/ignore-user-inactive.gif" id="ignore" alt="<?php echo ((isset($this->_rootref['L_OFFLINE'])) ? $this->_rootref['L_OFFLINE'] : ((isset($user->lang['OFFLINE'])) ? $user->lang['OFFLINE'] : '{ OFFLINE }')); ?>" />
											<?php } ?>
										</div>
									</div>
									<?php } ?>

									<div style="clear: left;"><!--ie--></div>
											
									<?php if ($_postrow_val['RANK_BLIZZ'] && $this->_rootref['S_PBWOW_BLIZZ_RANKS']) {  ?>
									<div style="position: relative; width: 200px;">
										<div style="padding-top: 5px;"></div>
										<div class="chardata">
											<span>
												<b style="color:#ffac04;">
												<a style="text-decoration:none" href="<?php echo $_postrow_val['U_POST_AUTHOR']; ?>"><?php echo $_postrow_val['POST_AUTHOR']; ?></a>
												</b>
											</span>
										</div>
										<div id="afterAvatar" <?php if ($_postrow_val['S_IGNORE_POST']) {  ?>style="display:none"<?php } ?>>
											<small><span style="color:<?php echo $_postrow_val['POST_AUTHOR_COLOUR']; ?>"><?php echo $_postrow_val['SPECIAL_RANK_TITLE']; ?></span></small>
										</div>
									</div>
									<?php } else { ?>
									<div style="position: relative; width: 200px;">
										<div id="pinfo" class="pinfo" <?php if ($_postrow_val['S_IGNORE_POST']) {  ?>style="background:none; padding:5px 0 0 0"<?php } ?>>
											<div id="pinfobackground" class="pinfobackground" <?php if ($_postrow_val['S_IGNORE_POST']) {  ?>style="background:none"<?php } ?>>
												<div class="chardata">
													<span><b style="color:#ffac04;">
														<?php if ($_postrow_val['U_POST_AUTHOR']) {  ?>
														<a href="<?php echo $_postrow_val['U_POST_AUTHOR']; ?>"><?php echo $_postrow_val['POST_AUTHOR']; ?></a>
														<?php } else { ?>
														<?php echo $_postrow_val['POST_AUTHOR']; ?>
														<?php } ?>
														</b>
													</span>
												</div>
												<div id="afterAvatar" <?php if ($_postrow_val['S_IGNORE_POST']) {  ?>style="display:none"<?php } ?>>
													<?php if ($_postrow_val['S_PROFILE_PBGUILD']) {  ?>
													<ul class="listinfo">
														<li class="icon-guild"><small style="color:#FFB019"><b><?php if ($_postrow_val['S_PROFILE_PBARMORYGUILDLINK']) {  ?><a href="<?php echo $_postrow_val['PROFILE_PBARMORYGUILDLINK_VALUE']; ?>" target="_blank">&lt; <?php echo $_postrow_val['PROFILE_PBGUILD_VALUE']; ?> &gt;</a><?php } else { ?>&lt; <?php echo $_postrow_val['PROFILE_PBGUILD_VALUE']; ?> &gt;<?php } ?></b></small></li>
													</ul>
													<?php } if ($_postrow_val['SPECIAL_RANK_TITLE']) {  ?>
													<ul class="listinfo" style="clear: both;">
														<li class="icon-realm"><small><b><?php echo $_postrow_val['SPECIAL_RANK_TITLE']; ?></b></small></li>
													</ul>
													<?php } if (! $this->_rootref['S_IS_BOT']) {  if ($_postrow_val['U_PM'] || $_postrow_val['U_EMAIL'] || $_postrow_val['U_WWW'] || $_postrow_val['U_MSN'] || $_postrow_val['U_ICQ'] || $_postrow_val['U_YIM'] || $_postrow_val['U_AIM'] || $_postrow_val['U_JABBER']) {  ?>
													<ul class="listinfo" style="clear: both;">
														<li class="icon-realm">		
															<?php if ($_postrow_val['U_PM']) {  ?><a href="<?php echo $_postrow_val['U_PM']; ?>" title="<?php echo ((isset($this->_rootref['L_PRIVATE_MESSAGE'])) ? $this->_rootref['L_PRIVATE_MESSAGE'] : ((isset($user->lang['PRIVATE_MESSAGE'])) ? $user->lang['PRIVATE_MESSAGE'] : '{ PRIVATE_MESSAGE }')); ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/pm.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_PRIVATE_MESSAGE'])) ? $this->_rootref['L_PRIVATE_MESSAGE'] : ((isset($user->lang['PRIVATE_MESSAGE'])) ? $user->lang['PRIVATE_MESSAGE'] : '{ PRIVATE_MESSAGE }')); ?>" /></a><?php } if ($_postrow_val['U_EMAIL']) {  ?><a href="<?php echo $_postrow_val['U_EMAIL']; ?>" title="<?php echo ((isset($this->_rootref['L_SEND_EMAIL_USER'])) ? $this->_rootref['L_SEND_EMAIL_USER'] : ((isset($user->lang['SEND_EMAIL_USER'])) ? $user->lang['SEND_EMAIL_USER'] : '{ SEND_EMAIL_USER }')); ?> <?php echo $_postrow_val['POST_AUTHOR']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/im_email.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_SEND_EMAIL_USER'])) ? $this->_rootref['L_SEND_EMAIL_USER'] : ((isset($user->lang['SEND_EMAIL_USER'])) ? $user->lang['SEND_EMAIL_USER'] : '{ SEND_EMAIL_USER }')); ?> <?php echo $_postrow_val['POST_AUTHOR']; ?>" /></a><?php } if ($_postrow_val['U_WWW']) {  ?><a href="<?php echo $_postrow_val['U_WWW']; ?>" title="<?php echo ((isset($this->_rootref['L_VISIT_WEBSITE'])) ? $this->_rootref['L_VISIT_WEBSITE'] : ((isset($user->lang['VISIT_WEBSITE'])) ? $user->lang['VISIT_WEBSITE'] : '{ VISIT_WEBSITE }')); ?>: <?php echo $_postrow_val['U_WWW']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/www.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_WEBSITE'])) ? $this->_rootref['L_WEBSITE'] : ((isset($user->lang['WEBSITE'])) ? $user->lang['WEBSITE'] : '{ WEBSITE }')); ?>" /></a><?php } if ($_postrow_val['U_MSN']) {  ?>&nbsp;<a href="<?php echo $_postrow_val['U_MSN']; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_MSNM'])) ? $this->_rootref['L_MSNM'] : ((isset($user->lang['MSNM'])) ? $user->lang['MSNM'] : '{ MSNM }')); ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/im_msn.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_MSNM'])) ? $this->_rootref['L_MSNM'] : ((isset($user->lang['MSNM'])) ? $user->lang['MSNM'] : '{ MSNM }')); ?>" /></a><?php } if ($_postrow_val['U_ICQ']) {  ?>&nbsp;<a href="<?php echo $_postrow_val['U_ICQ']; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_ICQ'])) ? $this->_rootref['L_ICQ'] : ((isset($user->lang['ICQ'])) ? $user->lang['ICQ'] : '{ ICQ }')); ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/im_icq.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_ICQ'])) ? $this->_rootref['L_ICQ'] : ((isset($user->lang['ICQ'])) ? $user->lang['ICQ'] : '{ ICQ }')); ?>" /></a><?php } if ($_postrow_val['U_YIM']) {  ?>&nbsp;<a href="<?php echo $_postrow_val['U_YIM']; ?>" onclick="popup(this.href, 780, 550); return false;" title="<?php echo ((isset($this->_rootref['L_YIM'])) ? $this->_rootref['L_YIM'] : ((isset($user->lang['YIM'])) ? $user->lang['YIM'] : '{ YIM }')); ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/im_yahoo.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_YIM'])) ? $this->_rootref['L_YIM'] : ((isset($user->lang['YIM'])) ? $user->lang['YIM'] : '{ YIM }')); ?>" /></a><?php } if ($_postrow_val['U_AIM']) {  ?>&nbsp;<a href="<?php echo $_postrow_val['U_AIM']; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_AIM'])) ? $this->_rootref['L_AIM'] : ((isset($user->lang['AIM'])) ? $user->lang['AIM'] : '{ AIM }')); ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/im_aim.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_AIM'])) ? $this->_rootref['L_AIM'] : ((isset($user->lang['AIM'])) ? $user->lang['AIM'] : '{ AIM }')); ?>" /></a><?php } if ($_postrow_val['U_JABBER']) {  ?>&nbsp;<a href="<?php echo $_postrow_val['U_JABBER']; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_JABBER'])) ? $this->_rootref['L_JABBER'] : ((isset($user->lang['JABBER'])) ? $user->lang['JABBER'] : '{ JABBER }')); ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/im_jabber.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_JABBER'])) ? $this->_rootref['L_JABBER'] : ((isset($user->lang['JABBER'])) ? $user->lang['JABBER'] : '{ JABBER }')); ?>" /></a><?php } ?>
														</li>
													</ul>
													<?php } } ?>	
													<div style="clear:both;width:100%;height:1px"><!----></div>
												</div>
											</div>
										</div><!-- end pinfo -->
										
										<div id="hideplayerfooter" <?php if ($_postrow_val['S_IGNORE_POST']) {  ?>style="display:none"<?php } ?>>
											<div class="pinfobottom">
												<div class="pifooter"></div>
											</div>
										</div>
									</div>
									<?php } ?>
								</td>
										
								<td class="tools<?php if (($_postrow_val['S_ROW_COUNT'] & 1)  ) {  ?>2<?php } else { ?>1<?php } ?>1">
									<div id="postid<?php if (($_postrow_val['S_ROW_COUNT'] & 1)  ) {  ?>2<?php } else { ?>1<?php } ?>1">
										<ul>
											<li style="display:table-cell;"><span class="white">
											<?php if ($_postrow_val['S_IGNORE_POST']) {  ?>
												<div style="width:100px"><small><?php echo $_postrow_val['L_IGNORE_POST']; ?></small></div>
											<?php } else { if ($_postrow_val['S_UNREAD_POST']) {  ?><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/new-icon.gif" width="19" height="15" />&nbsp;<?php } ?><b><?php echo $_postrow_val['POST_NUMBER']; ?>.&nbsp;
												<?php if ($_postrow_val['S_POST_REPORTED']) {  ?><a href="<?php echo $_postrow_val['U_MCP_REPORT']; ?>"><strong style="color:#FF0000"><?php echo ((isset($this->_rootref['L_POST_REPORTED'])) ? $this->_rootref['L_POST_REPORTED'] : ((isset($user->lang['POST_REPORTED'])) ? $user->lang['POST_REPORTED'] : '{ POST_REPORTED }')); ?></strong></a><?php } else { ?>
												<a href="<?php echo $_postrow_val['U_MINI_POST']; ?>"><?php echo $_postrow_val['POST_SUBJECT']; ?></a><?php } ?></b>&nbsp;&nbsp;<small>&raquo; <?php echo $_postrow_val['POST_DATE']; ?></small>
											<?php } ?>
											</span></li>
										</ul>
									</div>

									<div class="miniadmin">
										<ul>
<?php if (! $this->_rootref['S_IS_BOT']) {  if ($_postrow_val['U_EDIT']) {  ?>&nbsp;<a href="<?php echo $_postrow_val['U_EDIT']; ?>" title="<?php echo ((isset($this->_rootref['L_EDIT_POST'])) ? $this->_rootref['L_EDIT_POST'] : ((isset($user->lang['EDIT_POST'])) ? $user->lang['EDIT_POST'] : '{ EDIT_POST }')); ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/edit-button.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_EDIT_POST'])) ? $this->_rootref['L_EDIT_POST'] : ((isset($user->lang['EDIT_POST'])) ? $user->lang['EDIT_POST'] : '{ EDIT_POST }')); ?>" /></a><?php } if ($_postrow_val['U_DELETE']) {  ?>&nbsp;<a href="<?php echo $_postrow_val['U_DELETE']; ?>" title="<?php echo ((isset($this->_rootref['L_DELETE_POST'])) ? $this->_rootref['L_DELETE_POST'] : ((isset($user->lang['DELETE_POST'])) ? $user->lang['DELETE_POST'] : '{ DELETE_POST }')); ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/delete-icon.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_DELETE_POST'])) ? $this->_rootref['L_DELETE_POST'] : ((isset($user->lang['DELETE_POST'])) ? $user->lang['DELETE_POST'] : '{ DELETE_POST }')); ?>" /></a><?php } if ($_postrow_val['U_REPORT']) {  ?>&nbsp;<a href="<?php echo $_postrow_val['U_REPORT']; ?>" title="<?php echo ((isset($this->_rootref['L_REPORT_POST'])) ? $this->_rootref['L_REPORT_POST'] : ((isset($user->lang['REPORT_POST'])) ? $user->lang['REPORT_POST'] : '{ REPORT_POST }')); ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/biohazard-button.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_REPORT_POST'])) ? $this->_rootref['L_REPORT_POST'] : ((isset($user->lang['REPORT_POST'])) ? $user->lang['REPORT_POST'] : '{ REPORT_POST }')); ?>" /></a><?php } if ($_postrow_val['U_WARN']) {  ?>&nbsp;<a href="<?php echo $_postrow_val['U_WARN']; ?>" title="<?php echo ((isset($this->_rootref['L_WARN_USER'])) ? $this->_rootref['L_WARN_USER'] : ((isset($user->lang['WARN_USER'])) ? $user->lang['WARN_USER'] : '{ WARN_USER }')); ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/warn.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_WARN_USER'])) ? $this->_rootref['L_WARN_USER'] : ((isset($user->lang['WARN_USER'])) ? $user->lang['WARN_USER'] : '{ WARN_USER }')); ?>" /></a><?php } if ($_postrow_val['U_INFO']) {  ?>&nbsp;<a href="<?php echo $_postrow_val['U_INFO']; ?>" title="<?php echo ((isset($this->_rootref['L_INFORMATION'])) ? $this->_rootref['L_INFORMATION'] : ((isset($user->lang['INFORMATION'])) ? $user->lang['INFORMATION'] : '{ INFORMATION }')); ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/icon-help.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_INFORMATION'])) ? $this->_rootref['L_INFORMATION'] : ((isset($user->lang['INFORMATION'])) ? $user->lang['INFORMATION'] : '{ INFORMATION }')); ?>" /></a><?php } } if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_DISPLAY_REPLY_INFO']) {  if ($this->_rootref['S_IS_LOCKED']) {  ?>
	<a href="<?php echo $_postrow_val['U_QUOTE']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/quote-button-inactive.gif" width="63" height="18" border="0" alt="<?php echo ((isset($this->_rootref['L_TOPIC_LOCKED'])) ? $this->_rootref['L_TOPIC_LOCKED'] : ((isset($user->lang['TOPIC_LOCKED'])) ? $user->lang['TOPIC_LOCKED'] : '{ TOPIC_LOCKED }')); ?>" /></a>
	<a href="<?php echo (isset($this->_rootref['U_POST_REPLY_TOPIC'])) ? $this->_rootref['U_POST_REPLY_TOPIC'] : ''; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/reply-button-inactive.gif" width="63" height="18" border="0" alt="<?php echo ((isset($this->_rootref['L_TOPIC_LOCKED'])) ? $this->_rootref['L_TOPIC_LOCKED'] : ((isset($user->lang['TOPIC_LOCKED'])) ? $user->lang['TOPIC_LOCKED'] : '{ TOPIC_LOCKED }')); ?>" /></a>
	<?php } else { ?>
	<a href="<?php echo $_postrow_val['U_QUOTE']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/quote-button.gif" width="63" height="18" border="0" alt="<?php echo ((isset($this->_rootref['L_REPLY_WITH_QUOTE'])) ? $this->_rootref['L_REPLY_WITH_QUOTE'] : ((isset($user->lang['REPLY_WITH_QUOTE'])) ? $user->lang['REPLY_WITH_QUOTE'] : '{ REPLY_WITH_QUOTE }')); ?>" /></a>
	<a href="<?php echo (isset($this->_rootref['U_POST_REPLY_TOPIC'])) ? $this->_rootref['U_POST_REPLY_TOPIC'] : ''; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/reply-button.gif" width="63" height="18" border="0" alt="<?php echo ((isset($this->_rootref['L_POST_REPLY'])) ? $this->_rootref['L_POST_REPLY'] : ((isset($user->lang['POST_REPLY'])) ? $user->lang['POST_REPLY'] : '{ POST_REPLY }')); ?>" /></a>
	<?php } } ?>
										</ul>													
									</div>
								</td>
							</tr>

							<tr id="body" <?php if ($_postrow_val['S_IGNORE_POST']) {  ?>style="display:none"<?php } ?>>
								<td class="message<?php if (($_postrow_val['S_ROW_COUNT'] & 1)  ) {  ?>2<?php } else { ?>1<?php } ?>1">
									<table id="postbody<?php if (($_postrow_val['S_ROW_COUNT'] & 1)  ) {  ?>2<?php } else { ?>1<?php } ?>1" cellspacing="0" border="0">
										<tr>
											<td>
												<div class="breakWord <?php if ($_postrow_val['RANK_BLIZZ'] && $this->_rootref['S_PBWOW_BLIZZ_RANKS']) {  ?>blizpost<?php } ?>	">					
													<div class="message-format">
														<span>
															<?php if ($_postrow_val['S_POST_UNAPPROVED']) {  ?>
															<a href="<?php echo $_postrow_val['U_MCP_APPROVE']; ?>"><strong style="color:#FF0000"><?php echo ((isset($this->_rootref['L_POST_UNAPPROVED'])) ? $this->_rootref['L_POST_UNAPPROVED'] : ((isset($user->lang['POST_UNAPPROVED'])) ? $user->lang['POST_UNAPPROVED'] : '{ POST_UNAPPROVED }')); ?></strong></a><br /><br />
															<?php } ?>
	
															<span <?php if ($_postrow_val['RANK_BLIZZ'] && $this->_rootref['S_PBWOW_BLIZZ_RANKS']) {  ?>class="pbwow-admin-fix"<?php } ?> style="color:<?php echo $_postrow_val['POST_AUTHOR_COLOUR']; ?>">
																<?php echo $_postrow_val['MESSAGE']; ?>
															</span>
														
															<?php if ($_postrow_val['EDITED_MESSAGE'] || $_postrow_val['EDIT_REASON']) {  ?>
															<p><small><font color="red">[ <?php echo $_postrow_val['EDITED_MESSAGE']; ?> ]
															<?php if ($_postrow_val['EDIT_REASON']) {  ?><br />[ <strong><?php echo ((isset($this->_rootref['L_REASON'])) ? $this->_rootref['L_REASON'] : ((isset($user->lang['REASON'])) ? $user->lang['REASON'] : '{ REASON }')); ?>:</strong> <em><?php echo $_postrow_val['EDIT_REASON']; ?></em> ]<?php } ?>
															</font></small></p>
															<?php } if ($_postrow_val['S_HAS_ATTACHMENTS']) {  ?>
															<ins><hr noshade="noshade" size="1" color="#9e9e9e" /></ins>
															<b><?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?></b>
															<?php $_attachment_count = (isset($_postrow_val['attachment'])) ? sizeof($_postrow_val['attachment']) : 0;if ($_attachment_count) {for ($_attachment_i = 0; $_attachment_i < $_attachment_count; ++$_attachment_i){$_attachment_val = &$_postrow_val['attachment'][$_attachment_i]; ?>
															<?php echo $_attachment_val['DISPLAY_ATTACHMENT']; ?>
															<?php }} } if ($_postrow_val['S_DISPLAY_NOTICE']) {  ?>
															<ins><hr noshade="noshade" size="1" color="#9e9e9e" /></ins>
															<b><?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?></b>
															<div class="rules"><?php echo ((isset($this->_rootref['L_DOWNLOAD_NOTICE'])) ? $this->_rootref['L_DOWNLOAD_NOTICE'] : ((isset($user->lang['DOWNLOAD_NOTICE'])) ? $user->lang['DOWNLOAD_NOTICE'] : '{ DOWNLOAD_NOTICE }')); ?></div
															><?php } if ($_postrow_val['BUMPED_MESSAGE']) {  ?><div class="notice"><?php echo $_postrow_val['BUMPED_MESSAGE']; ?></div><?php } if ($_postrow_val['SIGNATURE']) {  ?>
															<ins><hr noshade="noshade" size="1" color="#9e9e9e" /></ins>
															<span <?php if ($_postrow_val['RANK_BLIZZ'] && $this->_rootref['S_PBWOW_BLIZZ_RANKS']) {  ?>class="pbwow-admin-fix"<?php } ?> style="color:<?php echo $_postrow_val['POST_AUTHOR_COLOUR']; ?>">
																<?php echo $_postrow_val['SIGNATURE']; ?>
															</span>
															<?php } ?>
														</span>
													</div>
												</div>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table><!-- End table posttable -->
					</div><!-- end insert -->
				</div><!-- end innercontainer -->
			</div><!-- end border -->
		</div><!-- end postdisplay -->
	</div><!-- end resultbox -->
</div><!-- End div postshell --><?php }} if ($this->_rootref['S_QUICK_REPLY']) {  $this->_tpl_include('quickreply_editor.html'); } if ($this->_rootref['S_PBWOW_ADS_SIDE']) {  ?>
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
</center>
							
							</div><!-- end right -->
						</div><!-- end postbackground -->
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<?php if ($this->_rootref['S_'] > (1) || $this->_rootref['PREVIOUS_']) {  ?>
	<form id="viewtopic" method="post" action="<?php echo (isset($this->_rootref['S_TOPIC_ACTION'])) ? $this->_rootref['S_TOPIC_ACTION'] : ''; ?>">
	<fieldset class="display-options" style="margin-top: 0; ">
		<?php if (! $this->_rootref['S_IS_BOT']) {  ?>
		<label><?php echo ((isset($this->_rootref['L_DISPLAY_POSTS'])) ? $this->_rootref['L_DISPLAY_POSTS'] : ((isset($user->lang['DISPLAY_POSTS'])) ? $user->lang['DISPLAY_POSTS'] : '{ DISPLAY_POSTS }')); ?>: <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?></label>
		<label><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?></label> <label><?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?> <input type="submit" name="sort" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" class="button2" /></label>
		<?php } ?>
	</fieldset>
	</form>
<?php } ?>

<div id="topicfooter" style="height:22px">
	<div class="rpage">
		<?php if ($this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_POSTS']) {  $this->_tpl_include('pbwow_pagination.html'); } ?>
	</div>
</div>
<div class="forum-index">
	<div class="findex" style="margin-top:-1px"> <a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/forum-index.gif" width="104" height="41" border="0" title="" alt="" /></a> </div>
</div>

<div style="width: 100%; height: 20px;"></div>

<?php $this->_tpl_include('pbwow_jumpbox_2.html'); if ($this->_rootref['MODERATORS']) {  ?>
<div align="center" style="padding:10px; margin-top:-20px">
	<span><b><?php if ($this->_rootref['S_SINGLE_MODERATOR']) {  echo ((isset($this->_rootref['L_MODERATOR'])) ? $this->_rootref['L_MODERATOR'] : ((isset($user->lang['MODERATOR'])) ? $user->lang['MODERATOR'] : '{ MODERATOR }')); } else { echo ((isset($this->_rootref['L_MODERATORS'])) ? $this->_rootref['L_MODERATORS'] : ((isset($user->lang['MODERATORS'])) ? $user->lang['MODERATORS'] : '{ MODERATORS }')); } ?></b></span>
	<table cellspacing="0" cellpadding="0" id="iconLegend">
		<tr>
			<td>
				<table class="tb2" width="100%" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td style="padding:10px"><?php echo (isset($this->_rootref['MODERATORS'])) ? $this->_rootref['MODERATORS'] : ''; ?></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div>
<?php } $this->_tpl_include('overall_footer.html'); ?>