<?php

if		( $_GET["lang"] == "tr" ) $lang = "tr_TR";
elseif	( $_GET["lang"] == "de" ) $lang = "de_DE";
else	$lang = "en_EN";

$locale = false; // initilize language parameter
if (isSet($lang)) // check if getting locale value in query string
{
    $locale = $lang; // add selected language in variable
}
else
{
    $locale = "en_EN"; // set English US as default language
}

putenv("LANGUAGE=$locale");
setlocale(LC_ALL, $locale);

$domain = "travianuas";
bindtextdomain($domain, "locale");

bind_textdomain_codeset($domain, "UTF-8");

textdomain($domain);

// get the last path in the URL

$url = $_SERVER['REQUEST_URI'];
$tokens = explode('/', $url);


// locale texts

	$locale_love = '<a class="tooltip-top" data-tooltip="PHP, HTML5, CSS3">❤</a>';
	$locale_title = _('Travian Unit Advice Simulator');
	$locale_description = _('Travian Unit Advice Simulator is a tool which gives advice to you about you should train which unit according to your available materials for Travian 4.4.');
	$locale_license = _('Travian UAS is released under GNU General Public License, version 3.');
	$locale_mertskaplan = '<a target="_blank" href="http://mertskaplan.com/">mertskaplan</a>';
	$locale_units = _('Units');
	$locale_quantity = _('Quantity');
	$locale_speed = _('Speed');
	$locale_total_upkeep = _('Total upkeep');
	$locale_total_carrying_capacity = _('Total carrying capacity');
	$locale_total_attack_force = _('Total attack force');
	$locale_total_infantry_defense_force = _('Total infantry defense force');
	$locale_total_cavalry_defense_force = _('Total cavalry defense force');
	$locale_legionnaire = _('Legionnaire');
	$locale_praetorian = _('Praetorian');
	$locale_imperian = _('Imperian');
	$locale_legati = _('Equites Legati');
	$locale_imperatoris = _('Equites Imperatoris');
	$locale_caesaris = _('Equites Caesaris');
	$locale_battering_ram = _('Battering Ram');
	$locale_fire_catapult = _('Fire Catapult');
	$locale_senator = _('Senator');
	$locale_settler = _('Settler');
	$locale_phalanx = _('Phalanx');
	$locale_swordsman = _('Swordsman');
	$locale_pathfinder = _('Pathfinder');
	$locale_thunder = _('Theutates Thunder');
	$locale_druidrider = _('Druidrider');
	$locale_haeduan = _('Haeduan');
	$locale_ram = _('Ram');
	$locale_trebuchet = _('Trebuchet');
	$locale_chieftain = _('Chieftain');
	$locale_clubswinger = _('Clubswinger');
	$locale_spearman = _('Spearman');
	$locale_axeman = _('Axeman');
	$locale_scout = _('Scout');
	$locale_paladin = _('Paladin');
	$locale_teutonic_knight = _('Teutonic Knight');
	$locale_catapult = _('Catapult');
	$locale_chief = _('Chief');
?>