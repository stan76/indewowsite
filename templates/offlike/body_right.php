<!-- Liens rapide -->
<div id="q-links">
<h3><?php echo $lang['quicklinks'];?></h3>
<ul>
<li>
<a href="<?php echo mw_url('server', 'howtoplay'); ?>"><?php echo $lang['howtoplay']; ?></a>
</li>
<li class="e">
<a href="<?php echo mw_url('server', 'rules'); ?>"><?php echo $lang['rules']; ?></a>
</li>
<li>
<a href="<?php echo mw_url('server', 'commands'); ?>"><?php echo $lang['quicklink7']; ?></a>
</li>
<li class="e">
<a href="<?php echo mw_url('account', 'restore'); ?>"><?php echo $lang['retrieve_pass']; ?></a>
</li>
<li>
<a href="<?php echo mw_url('server', 'realmstatus'); ?>"><?php echo $lang['realm_status']; ?></a>
</li>
<li class="e">
<a href="<?php echo mw_url('server', 'playersonline'); ?>"><?php echo $lang['players_online']; ?></a>
</li>
<li>
<a href="<?php echo mw_url('account', 'register'); ?>"><?php echo $lang['account_create']; ?></a>
</li>
<li class="e">
<a href="<?php echo mw_url('account', 'manage'); ?>"><?php echo $lang['quicklink2']; ?></a>
</li>
</ul></div>
<span class="gfxhook"></span>
<hr>
<!-- Liens rapide fin -->

<!-- Social-->
<div align="center" id="rightbox">
<a href="http://www.youtube.com"><img src="<?php echo $currtmp; ?>/images/_right/_social/youtube_off.png" onmouseover="this.src='<?php echo $currtmp; ?>/images/_right/_social/youtube_on.png';" onmouseout="this.src='<?php echo $currtmp; ?>/images/_right/_social/youtube_off.png';" name="Youtube" /></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://fr-fr.facebook.com/"><img src="<?php echo $currtmp; ?>/images/_right/_social/facebook_off.png" onmouseover="this.src='<?php echo $currtmp; ?>/images/_right/_social/facebook_on.png';" onmouseout="this.src='<?php echo $currtmp; ?>/images/_right/_social/facebook_off.png';" name="Facebook" /></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://twitter.com/"><img src="<?php echo $currtmp; ?>/images/_right/_social/twitter_off.png" onmouseover="this.src='<?php echo $currtmp; ?>/images/_right/_social/twitter_on.png';" onmouseout="this.src='<?php echo $currtmp; ?>/images/_right/_social/twitter_off.png';" name="Twitter" /></a>
</div>
<!-- Social fin-->

<!-- Informations serveur --> 
<?php if (count($servers) > 0): ?>

<?php foreach($servers as $server): ?>
<div id="box3">
<h3><?php echo $lang['serverinfo'];?>:</h3>
<ul>
<li><div>
<?php echo $lang['si_name']; ?>:&nbsp;<b><?php echo $server['name'];?></b>
</div></li>

<?php if (isset($server['realm_status'])): ?>
<li><div>
<?php echo $lang['si_status']; ?>:&nbsp;<?php if ($server['realm_status']): ?>
                <img src="<?php echo $currtmp; ?>/images/_right/_status/on.png" alt="" />
<?php else: ?>
                <img src="<?php echo $currtmp; ?>/images/_right/_status/off.png" alt="" />
<?php endif; ?>
</div></li>

<?php endif; if (isset($server['server_ip'])): ?>

<li><div>
<?php echo $lang['si_ip']; ?>:&nbsp;<b><?php echo $server['server_ip']; ?></b>
</div></li>

<?php endif; if (isset($server['type'])): ?>

<li><div>
<?php echo $lang['si_type']; ?>:&nbsp;<b><?php echo $server['type'];?></b>
</div></li>

<?php endif; if (isset($server['language'])): ?>

<li><div>
<?php echo $lang['si_lang']; ?>:&nbsp;<b><?php echo $server['language']; ?></b>
</div></li>

<?php endif; if (isset($server['population'])): ?>

<li><div><?php echo $lang['si_pop']; ?>:&nbsp;<b><?php echo population_view($server['population']);?></b>
</div></li>

<?php endif; if (isset($server['accounts'])): ?>

<li><div>
<?php echo $lang['si_acc']; ?>:&nbsp;<b><?php echo $server['accounts']; ?><?php if (isset($server['active_accounts'])): ?> <?php echo sprintf($lang['si_active_acc'], $server['active_accounts']); ?><?php endif; ?></b>
</div></li>

<?php endif; if (isset($server['characters'])): ?>

<li><div>
<?php echo $lang['si_chars']; ?>:&nbsp;<b><?php echo $server['characters'];?></b>
</div></li>

<?php endif; if ($server['moreinfo']): ?>
<?php endif; ?>
</ul></div>
<span class="gfxhook"></span>
<?php endforeach; ?>
<?php endif; ?>
<!-- Informations serveur fin -->

<!-- Système de vote -->
<div id="rightbox">
<center><a href="vote/"><img src="<?php echo $currtmp; ?>/images/_right/_vote/bouton_vote_off.png" onmouseover="this.src='<?php echo $currtmp; ?>/images/_right/_vote/bouton_vote_on.png';" onmouseout="this.src='<?php echo $currtmp; ?>/images/_right/_vote/bouton_vote_off.png';" name="MangosWeb" /></a></center>
</div>
<!-- Système de vote fin -->

<!-- Customization -->
<div id="rightbox">
<center><a href="index.php?n=account&sub=chartools"><img src="<?php echo $currtmp; ?>/images/_right/_custom/custom_off.png" onmouseover="this.src='<?php echo $currtmp; ?>/images/_right/_custom/custom_on.png';" onmouseout="this.src='<?php echo $currtmp; ?>/images/_right/_custom/custom_off.png';" name="Customization" /></a></center>
</div>
<!-- Customization fin -->

<!-- Guide -->
<div id="rightbox">
<div class="newcommer">
<h4><?php echo $lang['newcomers']; ?></h4>
<p style="margin-bottom: -1px;"><?php echo $lang['newcomers2']; ?></p>
<ul><li>&nbsp; <a href="index.php?n=server&sub=howtoplay"><?php echo $lang['howtoplay']; ?></a></li></ul>
</div></div>
<!-- Guide fin -->