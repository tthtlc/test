<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
SANITIZE : use of preg_replace with another regex
construction : use of sprintf via a %s with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$tainted = preg_replace('/\W/si','',$tainted);
$var = header(sprintf("Location: '%s'.php", $tainted));
?>