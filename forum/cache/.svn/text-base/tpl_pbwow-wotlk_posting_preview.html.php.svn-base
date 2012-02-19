<?php if (!defined('IN_PHPBB')) exit; if ($this->_rootref['S_HAS_POLL_OPTIONS']) {  ?>
<div id = "postshell11" style="width:100%">
	<div class = "resultbox">
		<div class="postdisplay">
			<div class = "innerborder">
				<div class = "postingcontainer11">
					<div class="postdiv11">
						<div class="deco-frame">
							<div class="deco-frame-right">
								<div class="deco-frame-left">
									<img class="poll-result-icon" src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/poll-open.gif" alt=""/>
									<div class="polls">
										<div class="poll-date">
											<div class="poll-date1">
												<div class="poll-date2"><?php if ($this->_rootref['L_POLL_LENGTH']) {  echo ((isset($this->_rootref['L_TIME'])) ? $this->_rootref['L_TIME'] : ((isset($user->lang['TIME'])) ? $user->lang['TIME'] : '{ TIME }')); ?>:<span> <?php echo ((isset($this->_rootref['L_POLL_LENGTH'])) ? $this->_rootref['L_POLL_LENGTH'] : ((isset($user->lang['POLL_LENGTH'])) ? $user->lang['POLL_LENGTH'] : '{ POLL_LENGTH }')); ?></span> | <?php } echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?>: <span><?php echo ((isset($this->_rootref['L_MAX_VOTES'])) ? $this->_rootref['L_MAX_VOTES'] : ((isset($user->lang['MAX_VOTES'])) ? $user->lang['MAX_VOTES'] : '{ MAX_VOTES }')); ?></span></div>
											</div>
										</div>
										<h1 style="padding: 10px 0 10px 25px; background: none; width:100%"><?php echo ((isset($this->_rootref['L_PREVIEW'])) ? $this->_rootref['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ PREVIEW }')); ?>: <span style="display: inline;">&quot;<?php echo (isset($this->_rootref['POLL_QUESTION'])) ? $this->_rootref['POLL_QUESTION'] : ''; ?>&quot;</span></h1><br /><br /><br />
										<div class="df">
											<h3></h3>
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
																	<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  echo ((isset($this->_rootref['L_POLL_VOTED_OPTION'])) ? $this->_rootref['L_POLL_VOTED_OPTION'] : ((isset($user->lang['POLL_VOTED_OPTION'])) ? $user->lang['POLL_VOTED_OPTION'] : '{ POLL_VOTED_OPTION }')); ?>:&nbsp;&nbsp;<?php } ?>
																	<?php echo $_poll_option_val['POLL_OPTION_CAPTION']; ?>
																	<span>
																		<?php if ($this->_rootref['S_IS_MULTI_CHOICE']) {  if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?>
																			<input type="checkbox" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" checked="checked" />
																			<?php } else { ?>
																			<input type="checkbox" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" />
																			<?php } } else { if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?>
																			<input type="radio" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" checked="checked" />
																			<?php } else { ?>
																			<input type="radio" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" />
																			<?php } } ?>
																	</span>
																</div>
															</div>
															<?php }} ?>
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
													<a class="result-inactive" style="top:20px;"></a>
													<a class="vote-link-inactive" style="top:20px;"></a>
												</div>
											</div>
										</div>
										<!-- End Show poll form or result -->
									</div>
									<!--  polls -->
								</div>
								<!-- end deco-frame-left -->
							</div>
							<!-- end deco-frame-right -->
						</div>
						<!-- end deco-frame -->
					</div>
					<!-- end postdiv11 -->
				</div>
				<!-- end innercontainer -->
			</div>
			<!-- end border -->
		</div>
		<!-- end postdisplay -->
	</div>
	<!-- end resultbox -->
</div>
<!-- End div postshell --><?php } ?>


<div id="postshell21" style="width:100%">
	<div class="resultbox" id="pr<?php echo $_topic_review_row_val['POST_ID']; ?>">
		<div class="postdisplay">
			<div class="innerborder">
				<div class="postingcontainer21">
					<div class="insert">
					<table id="posttable21" cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>							
							<td class ="tools21"><div id="postid21">
									<ul>
										<li style="display:table-cell;"><span class="white">
										<b><?php echo ((isset($this->_rootref['L_PREVIEW'])) ? $this->_rootref['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ PREVIEW }')); ?>:</b> <small><?php echo (isset($this->_rootref['PREVIEW_SUBJECT'])) ? $this->_rootref['PREVIEW_SUBJECT'] : ''; ?></small>
										</span></li>
									</ul>
								</div>
								<!-- End Post Info -->
								<div class="miniadmin">											
								</div>
							</td>
						</tr>
						<tr id="body">
							<td class="message21">
								<table id="postbody21" cellspacing="0" border="0" style="height:auto">
									<tr>
										<td>
											<div class="breakWord" style="min-height:75px;">
												<div class="message-format">
													<span>
													<span style="color:<?php echo $_topic_review_row_val['POST_AUTHOR_COLOUR']; ?>;">
														<?php echo (isset($this->_rootref['PREVIEW_MESSAGE'])) ? $this->_rootref['PREVIEW_MESSAGE'] : ''; ?>
													</span>

													<?php if (sizeof($this->_tpldata['attachment'])) {  ?>
														<ins><hr noshade="noshade" size="1" color="#9e9e9e" /></ins>
														<b><?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?></b>
															<?php $_attachment_count = (isset($this->_tpldata['attachment'])) ? sizeof($this->_tpldata['attachment']) : 0;if ($_attachment_count) {for ($_attachment_i = 0; $_attachment_i < $_attachment_count; ++$_attachment_i){$_attachment_val = &$this->_tpldata['attachment'][$_attachment_i]; ?>
															<?php echo $_attachment_val['DISPLAY_ATTACHMENT']; ?>
															<?php }} } if ($this->_rootref['PREVIEW_SIGNATURE']) {  ?>
														<ins><hr noshade="noshade" size="1" color="#9e9e9e" /></ins>
														<span style="color:<?php echo $_postrow_val['POST_AUTHOR_COLOUR']; ?>">
															<?php echo (isset($this->_rootref['PREVIEW_SIGNATURE'])) ? $this->_rootref['PREVIEW_SIGNATURE'] : ''; ?>
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
					</table>
					<!-- End table posttable -->
				</div> 
				<!-- end insert -->
			</div>
			<!-- end innercontainer -->
		</div>
		<!-- end border -->
	</div>
	<!-- end postdisplay -->
</div>
<!-- end resultbox -->
</div>
<!-- End div postshell -->