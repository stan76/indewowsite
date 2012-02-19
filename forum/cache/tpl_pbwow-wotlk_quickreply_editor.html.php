<?php if (!defined('IN_PHPBB')) exit; ?><script type="text/javascript">
// <![CDATA[
	function hide_qr(show)
	{
		dE('qr_editor_div');
		dE('qr_pbwow');
		if (show && document.getElementById('qr_editor_div').style.display != 'none')
		{
			document.getElementsByName('message')[0].focus();
		}
		return true;
	}


	function init_qr()
	{
		dE('qr_pbwow');
		return true;
	}
	onload_functions.push('init_qr();');

	
	// ]]>
</script>
<noscript>
<div id="postshell11" style="width:700px">
	<div class="resultbox">
		<div class="postdisplay">
			<div class="innerborder">
				<div class="postingcontainer11">
					<div class="insert">
<form method="post" action="<?php echo (isset($this->_rootref['U_QR_ACTION'])) ? $this->_rootref['U_QR_ACTION'] : ''; ?>">
	<div class="parent-forum haschild" onclick="toggle('childNodeQUICKREPLY');toggleChild('arrowQUICKREPLY')">
		<div style="background:url(<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/forumbullets/mohawk.gif) no-repeat 7px 7px"> <em id="arrowQUICKREPLY" class="child-view"></em>
			<h3><b><?php echo ((isset($this->_rootref['L_QUICKREPLY'])) ? $this->_rootref['L_QUICKREPLY'] : ((isset($user->lang['QUICKREPLY'])) ? $user->lang['QUICKREPLY'] : '{ QUICKREPLY }')); ?></b></h3>
		</div>
	</div>
	<div class="child-listing" style="display:block" id="childNodeQUICKREPLY">

		<fieldset class="fields1">
			<dl style="clear: left;">
				<dt><label for="subject"><?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?>:</label></dt>
				<dd><input type="text" name="subject" id="subject" size="45" maxlength="64" tabindex="2" value="<?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; ?>" class="inputbox autowidth" /></dd>
			</dl>
			<div id="message-box" style="margin:0 auto">
				<textarea style="height: 9em;" name="message" rows="7" cols="76" tabindex="3" class="inputbox"></textarea>
			</div>
		</fieldset>
		<fieldset class="submit-buttons">
			<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>
			<?php echo (isset($this->_rootref['QR_HIDDEN_FIELDS'])) ? $this->_rootref['QR_HIDDEN_FIELDS'] : ''; ?>
			<input type="submit" accesskey="s" tabindex="6" name="post" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="button1" />&nbsp;
			<input type="submit" accesskey="f" tabindex="6" name="full_editor" value="<?php echo ((isset($this->_rootref['L_FULL_EDITOR'])) ? $this->_rootref['L_FULL_EDITOR'] : ((isset($user->lang['FULL_EDITOR'])) ? $user->lang['FULL_EDITOR'] : '{ FULL_EDITOR }')); ?>" class="button2" />&nbsp;
		</fieldset>

		<div style="clear:both"><!--ie--></div>
	</div>
</form>
					</div><!-- end insert -->
				</div><!-- end innercontainer -->
			</div><!-- end border -->
		</div><!-- end postdisplay -->
	</div><!-- end resultbox -->
</div><!-- End div postshell -->
</noscript>

<div id="qr_pbwow" style="display:none">
<div id="postshell11" style="width:700px;">
	<div class="resultbox">
		<div class="postdisplay">
			<div class="innerborder">
				<div class="postingcontainer11">
					<div class="insert">
<form method="post" action="<?php echo (isset($this->_rootref['U_QR_ACTION'])) ? $this->_rootref['U_QR_ACTION'] : ''; ?>">
	<div class="parent-forum haschild" onclick="toggle('childNodeQUICKREPLY');toggleChild('arrowQUICKREPLY')">
		<div style="background:url(<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/forumbullets/mohawk.gif) no-repeat 7px 7px"> <em id="arrowQUICKREPLY" class="child-view"></em>
			<h3><b><?php echo ((isset($this->_rootref['L_QUICKREPLY'])) ? $this->_rootref['L_QUICKREPLY'] : ((isset($user->lang['QUICKREPLY'])) ? $user->lang['QUICKREPLY'] : '{ QUICKREPLY }')); ?></b></h3>
			<!--<fieldset class="submit-buttons" style="margin:0 40px 0 0">
				<input type="submit" name="show_qr" tabindex="1" class="button2" value="<?php echo ((isset($this->_rootref['L_SHOW_QR'])) ? $this->_rootref['L_SHOW_QR'] : ((isset($user->lang['SHOW_QR'])) ? $user->lang['SHOW_QR'] : '{ SHOW_QR }')); ?>" onclick="hide_qr(true);return false;"/>
			</fieldset>-->
		</div>
	</div>
	<div class="child-listing" style="display:none" id="childNodeQUICKREPLY">

		<fieldset class="fields1">
			<dl style="clear: left;">
				<dt><label for="subject"><?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?>:</label></dt>
				<dd><input type="text" name="subject" id="subject" size="45" maxlength="64" tabindex="2" value="<?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; ?>" class="inputbox autowidth" /></dd>
			</dl>
			<div id="message-box" style="margin:0 auto">
				<textarea style="height: 9em;" name="message" rows="7" cols="76" tabindex="3" class="inputbox"></textarea>
			</div>
		</fieldset>
		<fieldset class="submit-buttons">
			<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>
			<?php echo (isset($this->_rootref['QR_HIDDEN_FIELDS'])) ? $this->_rootref['QR_HIDDEN_FIELDS'] : ''; ?>
			<input type="submit" accesskey="s" tabindex="6" name="post" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="button1" />&nbsp;
			<input type="submit" accesskey="f" tabindex="6" name="full_editor" value="<?php echo ((isset($this->_rootref['L_FULL_EDITOR'])) ? $this->_rootref['L_FULL_EDITOR'] : ((isset($user->lang['FULL_EDITOR'])) ? $user->lang['FULL_EDITOR'] : '{ FULL_EDITOR }')); ?>" class="button2" />&nbsp;
		</fieldset>

		<div style="clear:both"><!--ie--></div>
	</div>
</form>
					</div><!-- end insert -->
				</div><!-- end innercontainer -->
			</div><!-- end border -->
		</div><!-- end postdisplay -->
	</div><!-- end resultbox -->
</div><!-- End div postshell -->
</div>