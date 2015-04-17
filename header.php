<?php include_once("locale.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <title><?php echo $locale_title ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="author" content="mertskaplan" />
	<meta name="copyright" content="<?php echo $locale_license ?>" />
	
	<meta property="og:title" content="<?php echo $locale_title ?>" />
	<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
	<meta property="og:description" content="<?php echo $locale_description ?>" />
	<meta property="og:image" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/images/favicon.png" />
	<meta property="og:image:width" content="260" />
	<meta property="og:image:height" content="260" />
	
	<link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
	<link rel="icon" type="image/png" href="/images/favicon.png" />
	<link type="text/css" rel="stylesheet" href="/styles/tooltip.min.css" />
	<link type="text/css" rel="stylesheet" href="/styles/table-style.min.css" />
	<link type="text/css" rel="stylesheet" href="/styles/style.min.css" />
</head>

<body>
<div class="header">
	<div class="menu">
		<ul>
			<li><a href="home"><?php echo _('Home') ?></a></li>
			<li><a href="gauls"><?php echo _('Gauls') ?></a></li>
			<li><a href="romans"><?php echo _('Romans') ?></a></li>
			<li><a href="teutons"><?php echo _('Teutons') ?></a></li>
		</ul>
	</div>
	<div class="lang">
		<a class="tooltip-bottom" data-tooltip="English" href="/en/<?php echo $tokens[sizeof($tokens)-1]; ?>"><img id="english" alt="English" height="1" width="1" src="/images/x.gif" /></a> 
<!--		<a class="tooltip-bottom" data-tooltip="Deutsch" href="/de/<?php echo $tokens[sizeof($tokens)-1]; ?>"><img id="german" alt="Deutsch" height="1" width="1" src="/images/x.gif" /></a> -->
		<a class="tooltip-bottom" data-tooltip="Türkçe" href="/tr/<?php echo $tokens[sizeof($tokens)-1]; ?>"><img id="turkish" alt="Türkçe" height="1" width="1" src="/images/x.gif" /></a> 
		<a class="tooltip-left" data-tooltip="<?php echo _('Add another language') ?>" href="https://www.transifex.com/projects/p/travian-uas/" target="_blank"><img id="add-language" alt="<?php echo _('Add another language') ?>" height="1" width="1" src="/images/x.gif" /></a>
	</div>
</div>