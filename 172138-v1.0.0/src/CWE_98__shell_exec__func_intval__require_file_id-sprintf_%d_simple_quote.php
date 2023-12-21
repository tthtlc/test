<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : use of intval
construction : use of sprintf via a %d with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = intval($tainted);
$var = require(sprintf("pages/'%d'.php", $tainted));
?>