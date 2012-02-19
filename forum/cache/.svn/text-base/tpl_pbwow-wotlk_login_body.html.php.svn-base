<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

<div style="min-width: 775px; margin: 0; padding: 0;">
	<table cellspacing="0" cellpadding="0" border="0">
		<tr>
			<td><br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" width="775" height="1" border="0" alt="" /> </td>
		</tr>
	</table>
</div>
<div id="search"></div>
<!--<form action="<?php echo (isset($this->_rootref['S_LOGIN_ACTION'])) ? $this->_rootref['S_LOGIN_ACTION'] : ''; ?>" method="post" id="login">-->
<form action="<?php echo (isset($this->_rootref['S_LOGIN_ACTION'])) ? $this->_rootref['S_LOGIN_ACTION'] : ''; ?>" method="post">
	<div id="post">
		<div class="post-box">
			<div class="post-box-bottom">
				<div class="post-box-top">
					<div id="post-topic-shell">
						<div class="resultbox">
							<div id="postdisplay">
								<div class="innerborder">
									<div class="insert">
										<blockquote>
											<div class="post-top">
												<div id="login-page">
													<div style="height: 2px; font-size: 1px; position: relative;"></div>
													<div class="login-message">
														<ul>
															<li>
																<h3></h3>
															</li>
															<li class="help-tip">
															<?php if ($this->_rootref['LOGIN_ERROR']) {  ?><span style="color:red"><?php echo (isset($this->_rootref['LOGIN_ERROR'])) ? $this->_rootref['LOGIN_ERROR'] : ''; ?></span><?php } else if ($this->_rootref['LOGIN_EXPLAIN']) {  echo (isset($this->_rootref['LOGIN_EXPLAIN'])) ? $this->_rootref['LOGIN_EXPLAIN'] : ''; } else { echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); } ?> </li>
														</ul>
													</div>
													<!-- end login-message-->
													<div class="login-account">
														<div class="login-title"></div>
														<h4><span><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</span></h4>
														<input type="text" tabindex="1" name="<?php echo (isset($this->_rootref['USERNAME_CREDENTIAL'])) ? $this->_rootref['USERNAME_CREDENTIAL'] : ''; ?>" id="<?php echo (isset($this->_rootref['USERNAME_CREDENTIAL'])) ? $this->_rootref['USERNAME_CREDENTIAL'] : ''; ?>" size="20" value="<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>" class="login-account-field" />
													</div>
													<!-- end login-account-->
													<div class="login-password">
														<h5><span><?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>:</span></h5>
														<input type="password" tabindex="2" id="<?php echo (isset($this->_rootref['PASSWORD_CREDENTIAL'])) ? $this->_rootref['PASSWORD_CREDENTIAL'] : ''; ?>" name="<?php echo (isset($this->_rootref['PASSWORD_CREDENTIAL'])) ? $this->_rootref['PASSWORD_CREDENTIAL'] : ''; ?>" size="20" class="login-password-field" />
													</div>
													<!-- end login-password-->
												</div>
												<!-- end login-page--><?php if ($this->_rootref['S_DISPLAY_FULL_LOGIN'] && ( $this->_rootref['U_SEND_PASSWORD'] || $this->_rootref['U_RESEND_ACTIVATION'] )) {  if ($this->_rootref['U_SEND_PASSWORD']) {  ?><div class="forgot-password" style="right: 80px; text-align:right"><a href="<?php echo (isset($this->_rootref['U_SEND_PASSWORD'])) ? $this->_rootref['U_SEND_PASSWORD'] : ''; ?>"><?php echo ((isset($this->_rootref['L_FORGOT_PASS'])) ? $this->_rootref['L_FORGOT_PASS'] : ((isset($user->lang['FORGOT_PASS'])) ? $user->lang['FORGOT_PASS'] : '{ FORGOT_PASS }')); ?></a></div><?php } if ($this->_rootref['U_RESEND_ACTIVATION']) {  ?><div class="forgot-password" style="top: -135px; right: -70px; text-align:right"><a href="<?php echo (isset($this->_rootref['U_RESEND_ACTIVATION'])) ? $this->_rootref['U_RESEND_ACTIVATION'] : ''; ?>"><?php echo ((isset($this->_rootref['L_RESEND_ACTIVATION'])) ? $this->_rootref['L_RESEND_ACTIVATION'] : ((isset($user->lang['RESEND_ACTIVATION'])) ? $user->lang['RESEND_ACTIVATION'] : '{ RESEND_ACTIVATION }')); ?></a></div><?php } } if ($this->_rootref['CAPTCHA_TEMPLATE'] && $this->_rootref['S_CONFIRM_CODE']) {  $this->_tpldata['DEFINE']['.']['CAPTCHA_TAB_INDEX'] = 3; if (isset($this->_rootref['CAPTCHA_TEMPLATE'])) { $this->_tpl_include($this->_rootref['CAPTCHA_TEMPLATE']); } } ?>
										
												
												<div class="options-container">
													<div class="options-left">
														<div class="options-right">
															<div class="options-bot">
																<div class="options-top nobg">
																	<div class="login-options">
																		<?php if ($this->_rootref['S_DISPLAY_FULL_LOGIN']) {  if ($this->_rootref['S_AUTOLOGIN_ENABLED']) {  ?><input type="checkbox" name="autologin" id="autologin" tabindex="4" style="border:none; background:none" /> <?php echo ((isset($this->_rootref['L_LOG_ME_IN'])) ? $this->_rootref['L_LOG_ME_IN'] : ((isset($user->lang['LOG_ME_IN'])) ? $user->lang['LOG_ME_IN'] : '{ LOG_ME_IN }')); ?><br /><?php } ?>
																			<input type="checkbox" name="viewonline" id="viewonline" tabindex="5" style="border:none; background:none" /> <?php echo ((isset($this->_rootref['L_HIDE_ME'])) ? $this->_rootref['L_HIDE_ME'] : ((isset($user->lang['HIDE_ME'])) ? $user->lang['HIDE_ME'] : '{ HIDE_ME }')); ?>
																		<?php } ?>
		 															</div>
																	<!-- end sig-options-->
																	<div class="post-button">
																		<div class="post-button-left">
																			<div class="post-button-right">
																				<ul>
																					<li>
																						<!--<input type="image" class="button" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/button-login.gif" name="login" tabindex="6" />-->
																						<input type="submit" name="login" tabindex="6" value="" style="width:104px; height:30px; background:url(<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/button-login.gif) no-repeat; border:none; cursor:pointer"/>
																					</li>
																					<li><a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/button-cancel.gif" border="0"/></a></li>
																				</ul>
																			</div>
																			<!-- end post-button-right -->
																		</div>
																		<!-- end post-button-left -->
																	</div>
																	<!-- end post-button-->
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- end options-container --><?php if (! $this->_rootref['S_ADMIN_AUTH'] && $this->_rootref['S_REGISTER_ENABLED']) {  ?>
												<div class="vp-content" style="padding-bottom:20px">
													<table>
														<thead>
															<tr>
																<td><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></td>
															</tr>
														</thead>
														<tbody>
															<tr class="r0">
																<td>
																	<?php echo ((isset($this->_rootref['L_LOGIN_INFO'])) ? $this->_rootref['L_LOGIN_INFO'] : ((isset($user->lang['LOGIN_INFO'])) ? $user->lang['LOGIN_INFO'] : '{ LOGIN_INFO }')); ?>
																</td>
															</tr>
															<tr class="r1">
																<td align="center">
																	<a href="<?php echo (isset($this->_rootref['U_TERMS_USE'])) ? $this->_rootref['U_TERMS_USE'] : ''; ?>" class="link" style="border:none; display:inline"><span style="display:inline-block; margin:0 10px; cursor:pointer"><?php echo ((isset($this->_rootref['L_TERMS_USE'])) ? $this->_rootref['L_TERMS_USE'] : ((isset($user->lang['TERMS_USE'])) ? $user->lang['TERMS_USE'] : '{ TERMS_USE }')); ?></span></a><a href="<?php echo (isset($this->_rootref['U_PRIVACY'])) ? $this->_rootref['U_PRIVACY'] : ''; ?>" class="link" style="border:none; display:inline"><span style="display:inline-block; margin:0 10px; cursor:pointer"><?php echo ((isset($this->_rootref['L_PRIVACY'])) ? $this->_rootref['L_PRIVACY'] : ((isset($user->lang['PRIVACY'])) ? $user->lang['PRIVACY'] : '{ PRIVACY }')); ?></span></a><a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>" class="link" style="border:none; display:inline"><span style="display:inline-block; margin:0 10px; cursor:pointer"><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></span></a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
												<?php } ?>

											</div>
											<!-- end post-top -->
										</blockquote>
									</div>
									<!-- end insert -->
								</div>
								<!-- end border -->
							</div>
							<!-- end postdisplay -->
						</div>
						<!-- end resultbox -->
					</div>
					<!-- End div postshell -->
				</div>
				<!-- end post-box-top -->
			</div>
			<!-- end post-box-bottom -->
		</div>
		<!-- end post-box -->
	</div>
	<!-- end post -->
<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>
</form>
<div class="tbottom"></div>

<?php $this->_tpl_include('overall_footer.html'); ?>