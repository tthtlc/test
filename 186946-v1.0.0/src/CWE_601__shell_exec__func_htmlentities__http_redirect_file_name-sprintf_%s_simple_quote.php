<?php
/* 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
construction : use of sprintf via a %s with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = htmlentities($tainted, ENT_QUOTES);
//flaw
$var = http_redirect(sprintf("'%s'.php", $tainted));
?>