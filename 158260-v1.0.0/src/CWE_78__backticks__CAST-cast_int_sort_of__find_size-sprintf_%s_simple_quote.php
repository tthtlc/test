<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : cast via + = 0
construction : use of sprintf via a %s with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$tainted += 0 ;
$query = sprintf("find / size '%d'", $tainted);
$ret = system($query);
?>