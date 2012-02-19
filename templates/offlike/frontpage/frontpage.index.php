<div style="margin-left: -29px">
<style media="screen" title="currentStyle" type="text/css">
@import url("<?php echo $currtmp; ?>/css/additional_fp.css");
</style>
<div id="module-container">
<div style="width:470px;"></div>
<?php 
$banner = (int)$MW->getConfig->generic->display_banner_flash ? 1 : 0;
if ($banner):
?>
<div id="flashcontainer">
<embed type="application/x-shockwave-flash" src="./flash/loader2.swf" id="flashbanner" name="flashbanner" quality="high" wmode="transparent" base="./flash/<?php echo $GLOBALS['user_cur_lang']; ?>" flashvars="xmlname=news.xmls" height="340" width="500">
</div>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php else: ?>
    <img src="<?php echo $currtmp; ?>/images/banner1.jpg" alt="" width="500"/><br/>
<?php endif; ?>
</div>
<div class="module-container" <?php if ($banner==1) echo 'style="position: relative;"';?>>
<?php foreach($alltopics as $postanum => $topic){ 
    $postnum++;
    if($hl=='alt')$hl='';else $hl='alt';
?>                                                              
    <script type="text/javascript">
        var postId<?php echo$postnum;?>="<?php echo $topic['topic_id'];?>";
    </script>
	
    <script type="text/javascript"><!--
    var position = <?php echo$postnum;?>;
    var localId = postId<?php echo$postnum;?>;
    var cookieState = getcookie("news"+localId);
    var defaultOpen = "<?php echo($postnum > (int)$MW->getConfig->generic_values->news->defaultOpen?'0':'1');?>";
    if ((cookieState == 1) || (position==1 && cookieState!='0') || (defaultOpen == 1 && cookieState!='0')) {
    } else {
        document.getElementById("news"+localId).className = "news-collapse"+"<?php echo$hl;?>";       
    }
    --></script>
<?php }
unset($alltopics, $hl, $postnum);
?>                                                                
</div>

<div class="news-archive-link" <?php if ($banner==1) echo 'style="position: relative;"';?>>
    <div class="news-archive-button">
      <a href="forum/viewforum.php?f=7"><span><?php echo $lang['news_archives'];?></span></a>
    </div>
    </div>
	<div id="container-community">
		<div class="phatlootbox-top2">
			<div align="center">
			<br /><br />
				<div style="position:relative; top:-38px; left:0px">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="postContainerPlain"	>
						<tr>
							<td width="50%"><div align="center" style="position:relative; top:1px; left:0px;"><a href="./index.php"><img src="<?php echo $currtmp; ?>/images/parental.png" /></a></div></td>
							<td width="50%"><div align="center"><a href="./index.php"><img src="<?php echo $currtmp; ?>/images/emploi.png" /></a></div></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	
<!-- Histoire cataclysm -->
<div id="container-community">
<div class="phatlootbox-top">
<h2 class="community">
<span class="hide">G&eacute;n&eacute;ral</span>
</h2>
<span class="phatlootbox-visual comm"></span>
</div>
<div class="phatlootbox-wrapper">
<div style="background: url(<?php echo $currtmp; ?>/images/phatlootbox-top-parchment.jpg) repeat-y top right; height: 7px; width: 456px; margin-left: 6px; font-size: 1px;"></div>
<div class="community-cnt"><font color=orange face=Arial size=4><center><b><?php echo $lang['comm_header1'];?></center></b></font>
<br /><br />
<b><?php echo $lang['comm_header2'];?>
<br /><br />
<?php echo $lang['comm_header3'];?></b>
<br /><br />
<center><a href="http://www.wow-europe.com/cataclysm/"><img src="<?php echo $currtmp; ?>/images/_body/_cataclysm/cataclysm_off.png" onmouseover="this.src='<?php echo $currtmp; ?>/images/_body/_cataclysm/cataclysm_on.png';" onmouseout="this.src='<?php echo $currtmp; ?>/images/_body/_cataclysm/cataclysm_off.png';" name="Cataclysm" /></a></center>

</div>
<div class="phatlootbox-bottom">
</div>
</div>
</div>
<!-- Histoire cataclysm fin -->

<!-- Classe Worgen -->
<div id="container-community">
<div class="phatlootbox-top">
<h2 class="community">
<span class="hide">G&eacute;n&eacute;ral</span>
</h2>
<span class="phatlootbox-visual comm"></span>
</div>
<div class="phatlootbox-wrapper">
<div style="background: url(<?php echo $currtmp; ?>/images/phatlootbox-top-parchment.jpg) repeat-y top right; height: 7px; width: 456px; margin-left: 6px; font-size: 1px;"></div>
<div class="community-cnt"><font color=blue face=Arial size=4><center><b><?php echo $lang['comm_header4'];?></b></center></font>
<br /><br />
<b><?php echo $lang['comm_header5'];?></b>
<br /><br />
<center><a href="http://www.wow-europe.com/cataclysm/features/worgen.html"><img src="<?php echo $currtmp; ?>/images/_body/_cataclysm/worgen_off.png" onmouseover="this.src='<?php echo $currtmp; ?>/images/_body/_cataclysm/worgen_on.png';" onmouseout="this.src='<?php echo $currtmp; ?>/images/_body/_cataclysm/worgen_off.png';" name="Worgen" /></a></center>
</div>
<div class="phatlootbox-bottom">
</div>
</div>
</div>
<!--Classe Worgen fin-->

<!--Classe Goblin-->
<div id="container-community">
<div class="phatlootbox-top">
<h2 class="community">
<span class="hide">G&eacute;n&eacute;ral</span>
</h2>
<span class="phatlootbox-visual comm"></span>
</div>
<div class="phatlootbox-wrapper">
<div style="background: url(<?php echo $currtmp; ?>/images/phatlootbox-top-parchment.jpg) repeat-y top right; height: 7px; width: 456px; margin-left: 6px; font-size: 1px;"></div>
<div class="community-cnt"><font color=red face=Arial size=4><center><b><?php echo $lang['comm_header6'];?></b></center></font>
<br /><br />
<b><?php echo $lang['comm_header7'];?></b>
<br /><br />
<center><a href="http://www.wow-europe.com/cataclysm/features/goblin.html"><img src="<?php echo $currtmp; ?>/images/_body/_cataclysm/goblin_off.png" onmouseover="this.src='<?php echo $currtmp; ?>/images/_body/_cataclysm/goblin_on.png';" onmouseout="this.src='<?php echo $currtmp; ?>/images/_body/_cataclysm/goblin_off.png';" name="Goblin" /></a></center>
</div>
<div class="phatlootbox-bottom">
</div>
</div>
</div>
<!--Classe Goblin fin-->