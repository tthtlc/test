<?php
/* 
Unsafe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
sanitize : none
construction : interpretation with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
//no_sanitizing
//flaw
$var = http_redirect("'$tainted'.php");
?>