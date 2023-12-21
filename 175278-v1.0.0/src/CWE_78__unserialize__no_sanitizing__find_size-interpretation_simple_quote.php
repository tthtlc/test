<?php
/* 
Unsafe sample
input : Get a serialize string in POST and unserialize it
sanitize : none
construction : interpretation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
//no_sanitizing
$query = "find / size ' $tainted '";
//flaw
$ret = system($query);
?>