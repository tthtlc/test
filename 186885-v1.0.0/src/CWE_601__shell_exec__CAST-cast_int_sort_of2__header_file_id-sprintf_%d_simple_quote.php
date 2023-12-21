<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : cast via + = 0
construction : use of sprintf via a %d with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = $tainted + 0;
$var = header(sprintf("Location: pages/'%d'.php", $tainted));
?>