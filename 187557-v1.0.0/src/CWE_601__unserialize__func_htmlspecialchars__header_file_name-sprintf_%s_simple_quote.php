<?php
/* 
Unsafe sample
input : Get a serialize string in POST and unserialize it
sanitize : use of the function htmlspecialchars. Sanitizes the query but has a high chance to produce unexpected results
construction : use of sprintf via a %s with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = htmlspecialchars($tainted, ENT_QUOTES);
//flaw
$var = header(sprintf("Location: '%s'.php", $tainted));
?>