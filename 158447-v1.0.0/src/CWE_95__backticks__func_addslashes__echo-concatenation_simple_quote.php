<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : use of the function addslashes
construction : concatenation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$tainted = addslashes($tainted);
$query = "'echo $". $tainted . ";'";
$res = eval($query);
?>