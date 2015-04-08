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

?>