<?php
	include 'header.php';

$page_name = "home";	
?>

<div class="title">
	<h1><?php echo $locale_title ?></h1>
	<p><?php echo $locale_description ?></p>
</div>

<div class="selection">
	<a href="gauls"><div class="selection-gauls"><p><?php echo _("Gauls"); ?></p></div></a>
	<a href="romans"><div class="selection-romans"><p><?php echo _("Romans"); ?></p></div></a>
	<a href="teutons"><div class="selection-teutons"><p><?php echo _("Teutons"); ?></p></div></a>
</div>

<?php
	include 'footer.php';
?>