<?php
/* 
Safe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
sanitize : use of intval
construction : use of sprintf via a %d with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$tainted = intval($tainted);
$var = http_redirect(sprintf("pages/'%d'.php", $tainted));
?>