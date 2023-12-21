<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
sanitize : use of the function addslashes
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = addslashes($tainted);
//flaw
$var = header(sprintf("Location: '%s'", $tainted));
?>