<?php
/* 
Safe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
sanitize : use of the function addslashes
construction : use of sprintf via a %s with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$tainted = addslashes($tainted);
$query = sprintf("cat '%s'", $tainted);
$ret = system($query);
?>