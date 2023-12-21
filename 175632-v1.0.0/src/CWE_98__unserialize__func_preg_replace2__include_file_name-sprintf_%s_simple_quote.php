<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
SANITIZE : use of preg_replace with another regex
construction : use of sprintf via a %s with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = preg_replace('/\W/si','',$tainted);
$var = include(sprintf("'%s'.php", $tainted));
?>