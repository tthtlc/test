<?php
/* 
Safe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
SANITIZE : use of preg_replace
construction : concatenation with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$tainted = preg_replace('/\'/', '', $tainted);
$var = require("'". $tainted . ".php'");
?>