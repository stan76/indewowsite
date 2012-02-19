<?php if (!defined('IN_PHPBB')) exit; ?><div class="clear"></div>
<div id="topicheader" <?php if ($this->_rootref['S_IN_MCP']) {  ?>style="min-width:530px"<?php } ?>>
	<div id="topicview" style="margin-top: 14px;">
		<ul>
			<li><span><b><?php echo ((isset($this->_rootref['L_TOPIC_REVIEW'])) ? $this->_rootref['L_TOPIC_REVIEW'] : ((isset($user->lang['TOPIC_REVIEW'])) ? $user->lang['TOPIC_REVIEW'] : '{ TOPIC_REVIEW }')); ?>: <?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?></b></span></li>
		</ul>
	</div>
	<div id="topicview" style="margin-top: 14px; float:right">
		<ul>
			<li><span><b><a href="#review" onclick="viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').getElementsByTagName('a').item(0).firstChild; if (rev_text.data == '<?php echo ((isset($this->_rootref['LA_EXPAND_VIEW'])) ? $this->_rootref['LA_EXPAND_VIEW'] : ((isset($this->_rootref['L_EXPAND_VIEW'])) ? addslashes($this->_rootref['L_EXPAND_VIEW']) : ((isset($user->lang['EXPAND_VIEW'])) ? addslashes($user->lang['EXPAND_VIEW']) : '{ EXPAND_VIEW }'))); ?>'){rev_text.data = '<?php echo ((isset($this->_rootref['LA_COLLAPSE_VIEW'])) ? $this->_rootref['LA_COLLAPSE_VIEW'] : ((isset($this->_rootref['L_COLLAPSE_VIEW'])) ? addslashes($this->_rootref['L_COLLAPSE_VIEW']) : ((isset($user->lang['COLLAPSE_VIEW'])) ? addslashes($user->lang['COLLAPSE_VIEW']) : '{ COLLAPSE_VIEW }'))); ?>'; } else if (rev_text.data == '<?php echo ((isset($this->_rootref['LA_COLLAPSE_VIEW'])) ? $this->_rootref['LA_COLLAPSE_VIEW'] : ((isset($this->_rootref['L_COLLAPSE_VIEW'])) ? addslashes($this->_rootref['L_COLLAPSE_VIEW']) : ((isset($user->lang['COLLAPSE_VIEW'])) ? addslashes($user->lang['COLLAPSE_VIEW']) : '{ COLLAPSE_VIEW }'))); ?>'){rev_text.data = '<?php echo ((isset($this->_rootref['LA_EXPAND_VIEW'])) ? $this->_rootref['LA_EXPAND_VIEW'] : ((isset($this->_rootref['L_EXPAND_VIEW'])) ? addslashes($this->_rootref['L_EXPAND_VIEW']) : ((isset($user->lang['EXPAND_VIEW'])) ? addslashes($user->lang['EXPAND_VIEW']) : '{ EXPAND_VIEW }'))); ?>'};"><?php echo ((isset($this->_rootref['L_EXPAND_VIEW'])) ? $this->_rootref['L_EXPAND_VIEW'] : ((isset($user->lang['EXPAND_VIEW'])) ? $user->lang['EXPAND_VIEW'] : '{ EXPAND_VIEW }')); ?></a></b></span></li>
		</ul>
	</div>
</div>




<div id="postbackground">
	<div class="right">
<script type="text/javascript">
// <![CDATA[
	bbcodeEnabled = <?php echo (isset($this->_rootref['S_BBCODE_ALLOWED'])) ? $this->_rootref['S_BBCODE_ALLOWED'] : ''; ?>;
// ]]>
</script>
<div id="topicreview">
<?php $_topic_review_row_count = (isset($this->_tpldata['topic_review_row'])) ? sizeof($this->_tpldata['topic_review_row']) : 0;if ($_topic_review_row_count) {for ($_topic_review_row_i = 0; $_topic_review_row_i < $_topic_review_row_count; ++$_topic_review_row_i){$_topic_review_row_val = &$this->_tpldata['topic_review_row'][$_topic_review_row_i]; if ($_topic_review_row_val['S_FIRST_UNREAD']) {  ?><a id="unread"></a><?php } ?>
			<a id="p<?php echo $_topic_review_row_val['POST_ID']; ?>">
			<?php if (($_topic_review_row_val['S_ROW_COUNT'] & 1)  ) {  ?><div id="postshell21"><?php } else { ?><div id="postshell11"><?php } ?>
				<div class="resultbox" id="pr<?php echo $_topic_review_row_val['POST_ID']; ?>">
					<div class="postdisplay">
						<div class="innerborder">
							<?php if (($_topic_review_row_val['S_ROW_COUNT'] & 1)  ) {  ?><div class="postingcontainer21"><?php } else { ?><div class="postingcontainer11"><?php } ?>
								<div class="insert">
								<?php if (($_topic_review_row_val['S_ROW_COUNT'] & 1)  ) {  ?><table id="posttable21" cellpadding="0" cellspacing="0" border="0">
								<?php } else { ?><table id="posttable11" cellpadding="0" cellspacing="0" border="0"><?php } ?>
									<tr>
										<?php if (($_topic_review_row_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="id21" id="id" rowspan="2" style="background-image:none"><?php } else { ?><td class="id11" id="id" rowspan="2" style="background-image:none"><?php } ?>

											<div id="avatar" style="display:none"></div>
											<div style="clear: left;">
												<!--ie-->
											</div>
											
											<div style="min-height:100px; <?php if (! $this->_rootref['S_IN_MCP']) {  ?>width: 200px;<?php } ?>">
												<div id="pinfo" class="pinfo" style="background:none; padding:5px 0 0 0; <?php if ($this->_rootref['S_IN_MCP']) {  ?>width: 100%;<?php } ?>">
													<div id="pinfobackground" class="pinfobackground" style="background:none; <?php if ($this->_rootref['S_IN_MCP']) {  ?>width: 100%;<?php } ?>">

														<div class="chardata">
															<span><b>
																<?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> 
																<?php if ($_topic_review_row_val['U_POST_AUTHOR']) {  ?>
																<a href="<?php echo $_topic_review_row_val['U_POST_AUTHOR']; ?>"><?php echo $_topic_review_row_val['POST_AUTHOR_FULL']; ?></a>
																<?php } else { ?>
																<?php echo $_topic_review_row_val['POST_AUTHOR']; ?>
																<?php } ?>
																</b></span>
														</div>
													</div>
													<!-- end pinfobackground -->
												</div>
												<!-- end pinfo -->
												<div id="hideplayerfooter" style="display:none">
												</div>
											</div>
										</td>
										
										<?php if (($_topic_review_row_val['S_ROW_COUNT'] & 1)  ) {  ?><td class ="tools21"><div id="postid21"><?php } else { ?><td class="tools11"><div id="postid11"><?php } ?>
												<ul>
													<li style="display:table-cell;"><span class="white">
													<?php if ($_topic_review_row_val['S_IGNORE_POST']) {  ?>
														<div style="width:100px"><small><?php echo $_topic_review_row_val['L_IGNORE_POST']; ?></small></div>
													<?php } else { if ($_topic_review_row_val['S_POST_REPORTED']) {  ?><a href="<?php echo $_topic_review_row_val['U_MCP_REPORT']; ?>"><strong style="color:#FF0000"><?php echo ((isset($this->_rootref['L_POST_REPORTED'])) ? $this->_rootref['L_POST_REPORTED'] : ((isset($user->lang['POST_REPORTED'])) ? $user->lang['POST_REPORTED'] : '{ POST_REPORTED }')); ?></strong></a><?php } else { ?>
														<a href="<?php echo $_topic_review_row_val['U_MINI_POST']; ?>"><?php echo $_topic_review_row_val['POST_SUBJECT']; ?></a><?php } ?></b>&nbsp;&nbsp;<small>&raquo; <?php echo $_topic_review_row_val['POST_DATE']; ?></small>
													<?php } ?>
													</span></li>
												</ul>
											</div>
											<!-- End Post Info -->
											<div class="miniadmin">
												<ul>
													<?php if ($_topic_review_row_val['U_MCP_DETAILS']) {  ?>&nbsp;<a href="<?php echo $_topic_review_row_val['U_MCP_DETAILS']; ?>" title="<?php echo ((isset($this->_rootref['L_POST_DETAILS'])) ? $this->_rootref['L_POST_DETAILS'] : ((isset($user->lang['POST_DETAILS'])) ? $user->lang['POST_DETAILS'] : '{ POST_DETAILS }')); ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/icon-help.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_POST_DETAILS'])) ? $this->_rootref['L_POST_DETAILS'] : ((isset($user->lang['POST_DETAILS'])) ? $user->lang['POST_DETAILS'] : '{ POST_DETAILS }')); ?>" /></a><?php } if ($_topic_review_row_val['POSTER_QUOTE'] && $_topic_review_row_val['DECODED_MESSAGE']) {  ?>
													<a href="#postingbox" onclick="addquote(<?php echo $_topic_review_row_val['POST_ID']; ?>, '<?php echo $_topic_review_row_val['POSTER_QUOTE']; ?>');" title="<?php echo ((isset($this->_rootref['L_QUOTE'])) ? $this->_rootref['L_QUOTE'] : ((isset($user->lang['QUOTE'])) ? $user->lang['QUOTE'] : '{ QUOTE }')); ?> <?php echo $_topic_review_row_val['POST_AUTHOR']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/quote-button.gif" width="63" height="18" border="0" alt="<?php echo ((isset($this->_rootref['L_QUOTE'])) ? $this->_rootref['L_QUOTE'] : ((isset($user->lang['QUOTE'])) ? $user->lang['QUOTE'] : '{ QUOTE }')); ?> <?php echo $_topic_review_row_val['POST_AUTHOR']; ?>" /></a>
													<?php } else { ?>
													<img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/quote-button-inactive.gif" width="63" height="18" border="0" alt="" />
													<?php } ?>
												</ul>													
											</div>
										</td>
									</tr>
									<tr id="body">
										<?php if (($_topic_review_row_val['S_ROW_COUNT'] & 1)  ) {  ?>
										<td class="message21">
											<table id="postbody21" cellspacing="0" border="0" style="height:auto">
										<?php } else { ?>
										<td class="message11">
											<table id="postbody11" cellspacing="0" border="0" style="height:auto">
										<?php } ?>
												<tr>
													<td>
														<div class="breakWord" style="min-height:75px">
															<div class="message-format">
																<span>																
																<span style="color:<?php echo $_topic_review_row_val['POST_AUTHOR_COLOUR']; ?>">
																	<?php echo $_topic_review_row_val['MESSAGE']; ?>
																</span>
																
																<?php if ($_topic_review_row_val['POSTER_QUOTE'] && $_topic_review_row_val['DECODED_MESSAGE']) {  ?>
																	<div id="message_<?php echo $_topic_review_row_val['POST_ID']; ?>" style="display: none;"><?php echo $_topic_review_row_val['DECODED_MESSAGE']; ?></div>
																<?php } if ($_topic_review_row_val['S_HAS_ATTACHMENTS']) {  ?>
																	<ins><hr noshade="noshade" size="1" color="#9e9e9e" /></ins>
																	<b><?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?></b>
																		<?php $_attachment_count = (isset($_topic_review_row_val['attachment'])) ? sizeof($_topic_review_row_val['attachment']) : 0;if ($_attachment_count) {for ($_attachment_i = 0; $_attachment_i < $_attachment_count; ++$_attachment_i){$_attachment_val = &$_topic_review_row_val['attachment'][$_attachment_i]; ?>
																		<?php echo $_attachment_val['DISPLAY_ATTACHMENT']; ?>
																		<?php }} } ?>
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
		<!-- End div postshell --><?php }} ?>
</div>

	</div>
</div>
<?php if (! $this->_rootref['S_IN_MCP']) {  ?>
<div class="forum-index">
	<div class="findex"> <a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/forum-index.gif" width="104" height="41" border="0" title="" alt="" /></a> </div>
</div>
<?php } ?>