<?php
/* 
Safe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
sanitize : cast via + = 0.0
construction : use of sprintf via a %d with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$tainted += 0.0 ;
$var = header(sprintf("Location: pages/'%d'.php", $tainted));
?>