<?php
/* 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
SANITIZE : use of preg_replace with another regex
construction : interpretation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$tainted = preg_replace('/\W/si','',$tainted);
//flaw
$var = header("location: '$tainted'");
?>