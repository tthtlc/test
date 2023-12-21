<?php
/* 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : use of the function addslashes
construction : use of sprintf via a %s with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = addslashes($tainted);
//flaw
$var = header(sprintf("Location: '%s'", $tainted));
?>