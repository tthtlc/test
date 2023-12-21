<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : cast via + = 0
construction : use of sprintf via a %d with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted += 0 ;
$var = header(sprintf("Location: pages/'%d'.php", $tainted));
?>