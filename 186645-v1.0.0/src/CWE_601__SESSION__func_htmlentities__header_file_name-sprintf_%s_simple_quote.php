<?php
/* 
Unsafe sample
input : get the UserData field of $_SESSION
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = htmlentities($tainted, ENT_QUOTES);
//flaw
$var = header(sprintf("Location: '%s'.php", $tainted));
?>