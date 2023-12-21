<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : use of floatval
construction : interpretation with simple quote
*/
$tainted = system('ls', $retval);
$tainted = floatval($tainted);
$var = http_redirect("pages/'$tainted'.php");
?>