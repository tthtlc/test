<?php
/* 
Unsafe sample
input : Get a serialize string in POST and unserialize it
SANITIZE : use of preg_replace
construction : interpretation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = preg_replace('/\'/', '', $tainted);
//flaw
$var = header("Location: '$tainted'.php");
?>