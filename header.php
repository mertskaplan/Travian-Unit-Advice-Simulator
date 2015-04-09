<?php include_once("locale.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" style="height: 100%;">

<head>
    <title><?php echo _('Travian Unit Advice Simulator') ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="author" content="mertskaplan" />
	<meta name="copyright" content="Tüm hakları kamuya aittir." />
	<link type="text/css" rel="stylesheet" href="/styles/tooltip.css" />
	<link type="text/css" rel="stylesheet" href="/styles/table-style.css" />
	<link type="text/css" rel="stylesheet" href="/styles/style.css" />
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
		<a class="tooltip-bottom" data-tooltip="English" href="/en/<?php echo $tokens[sizeof($tokens)-1]; ?>"><img id="english" alt="English" src="/images/x.gif" /></a> 
<!--		<a class="tooltip-bottom" data-tooltip="Deutsch" href="/de/<?php echo $tokens[sizeof($tokens)-1]; ?>"><img id="german" alt="Deutsch" src="/images/x.gif" /></a> -->
		<a class="tooltip-bottom" data-tooltip="Türkçe" href="/tr/<?php echo $tokens[sizeof($tokens)-1]; ?>"><img id="turkish" alt="Türkçe" src="/images/x.gif" /></a> 
		<a class="tooltip-left" data-tooltip="<?php echo _('Add another language') ?>" href="https://www.transifex.com/projects/p/travian-uas/" target="_blank"><img id="add-language" alt="<?php echo _('Add another language') ?>" src="/images/x.gif" /></a>
	</div>
</div>

<!-- <div style="margin: 50px 0 0 50px; position: fixed; top: 0;">Dil: <?php echo @$lang; ?><br />
Adres: <?php echo $_SERVER['REQUEST_URI']; ?><br />
Tarayıcı dili: <?php echo substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); ?><br />
Adres son dizini: <?php echo $tokens[sizeof($tokens)-1]; ?>
</div> -->