<?php
	include 'header.php';

$page_name = "home";	
?>

<div class="title">
	<h1><?php echo _("Travian Unit Advice Simulator"); ?></h1>
</div>

<div class="selection">
	<a href="gauls"><div class="selection-gauls"><div><?php echo _("Gauls"); ?></div></div></a>
	<a href="romans"><div class="selection-romans"><div><?php echo _("Romans"); ?></div></div></a>
	<a href="teutons"><div class="selection-teutons"><div><?php echo _("Teutons"); ?></div></div></a>
</div>

<?php
	include 'footer.php';
?>