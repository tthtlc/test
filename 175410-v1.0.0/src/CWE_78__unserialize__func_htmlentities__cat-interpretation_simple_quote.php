<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
construction : interpretation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = htmlentities($tainted, ENT_QUOTES);
$query = "cat ' $tainted '";
$ret = system($query);
?>