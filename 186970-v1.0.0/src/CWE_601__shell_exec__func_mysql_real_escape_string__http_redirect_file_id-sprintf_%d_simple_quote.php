<?php
/* 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
SANITIZE : use of mysql_real_escape string
construction : use of sprintf via a %d with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = mysql_real_escape_string($tainted);
//flaw
$var = http_redirect(sprintf("pages/'%d'.php", $tainted));
?>