<?php
$lc = ""; // Initialize the language code variable
// Check to see that the global language server variable isset()
// If it is set, we cut the first two characters from that string
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}
// Now we simply evaluate that variable to detect specific languages
if($lc == "de"){
    header("location: http://travianuas.tk/de/home");
    exit();
} else if($lc == "tr"){
    header("location: http://travianuas.tk/tr/home");
    exit();
} else {
    header("location: http://travianuas.tk/en/home");
    exit();
}
?>