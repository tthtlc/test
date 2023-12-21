<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
construction : interpretation with simple quote
*/
$tainted = system('ls', $retval);
$tainted = htmlentities($tainted, ENT_QUOTES);
$query = "ls ' $tainted '";
$ret = system($query);
?>