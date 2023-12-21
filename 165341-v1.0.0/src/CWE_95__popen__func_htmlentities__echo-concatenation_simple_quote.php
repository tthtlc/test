<?php
/* 
Safe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
construction : concatenation with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$tainted = htmlentities($tainted, ENT_QUOTES);
$query = "'echo $". $tainted . ";'";
$res = eval($query);
?>