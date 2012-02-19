<br>
<?php builddiv_start(1, $lang['admin_panel']) ?>
<?php write_metalborder_header(); ?>
<ul style="font-weight:bold;"><h2>Gestion du site</h2>
      <li><a href="index.php?n=admin&amp;sub=members">Gestion des membres</a></li>
</ul>
<?php write_metalborder_footer(); ?>
<?php write_metalborder_header(); ?>
<ul style="font-weight:bold;"><h2>Outils de personnage</h2>
	  <li><a href="index.php?n=admin&sub=chartools">Renommer un personnage</a></li>
	  <li><a href="index.php?n=admin&sub=chartransfer">Transfert de personnage</a></li>
</ul>
<?php write_metalborder_footer(); ?>
<?php write_metalborder_header(); ?>
<ul style="font-weight:bold;"><h2>Gestion du serveur</h2>
	  <li><a href="index.php?n=admin&sub=tickets">Gestion des tickets</a></li>    
</ul>
<?php write_metalborder_footer(); ?>
<?php builddiv_end() ?>
