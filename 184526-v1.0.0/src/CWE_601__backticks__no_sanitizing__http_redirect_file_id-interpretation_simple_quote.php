<?php
/* 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : none
construction : interpretation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
//no_sanitizing
//flaw
$var = http_redirect("pages/'$tainted'.php");
?>