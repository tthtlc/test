<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : cast via + = 0.0
construction : interpretation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted += 0.0 ;
$var = include("pages/'$tainted'.php");
?>