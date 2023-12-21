<?php
/* 
Unsafe sample
input : execute a ls command using the function system, and put the last result in $tainted
SANITIZE : use of mysql_real_escape string
construction : use of sprintf via a %d with simple quote
*/
$tainted = system('ls', $retval);
$tainted = mysql_real_escape_string($tainted);
//flaw
$var = http_redirect(sprintf("pages/'%d'.php", $tainted));
?>