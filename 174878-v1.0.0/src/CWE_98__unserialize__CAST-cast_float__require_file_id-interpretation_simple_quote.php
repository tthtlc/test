<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : cast in float
construction : interpretation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = (float) $tainted ;
$var = require("pages/'$tainted'.php");
?>