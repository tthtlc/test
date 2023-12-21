<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
SANITIZE : use of preg_replace
construction : use of sprintf via a %s with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$tainted = preg_replace('/\'/', '', $tainted);
$query = sprintf("echo $'%s';", $tainted);
$res = eval($query);
?>