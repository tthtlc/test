<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : use of ternary condition
construction : interpretation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$var = http_redirect("pages/'$tainted'.php");
?>