<?php
/* 
Unsafe sample
input : Get a serialize string in POST and unserialize it
sanitize : none
construction : use of sprintf via a %d with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
//no_sanitizing
//flaw
$var = require(sprintf("pages/'%d'.php", $tainted));
?>