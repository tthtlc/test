<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : cast via + = 0
construction : interpretation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$tainted = $tainted + 0;
$var = include("pages/'$tainted'.php");
?>