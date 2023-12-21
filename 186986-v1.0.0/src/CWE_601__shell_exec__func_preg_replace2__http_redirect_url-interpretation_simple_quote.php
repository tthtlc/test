<?php
/* 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
SANITIZE : use of preg_replace with another regex
construction : interpretation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = preg_replace('/\W/si','',$tainted);
//flaw
$var = http_redirect("'$tainted'");
?>