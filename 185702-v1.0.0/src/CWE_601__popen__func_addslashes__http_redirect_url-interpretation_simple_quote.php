<?php
/* 
Unsafe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
sanitize : use of the function addslashes
construction : interpretation with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$tainted = addslashes($tainted);
//flaw
$var = http_redirect("'$tainted'");
?>