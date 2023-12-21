<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : use of intval
construction : use of sprintf via a %s with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$tainted = intval($tainted);
$query = sprintf("find / size '%d'", $tainted);
$ret = system($query);
?>