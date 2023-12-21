<?php
/* 
Unsafe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
SANITIZE : use of preg_replace
construction : use of sprintf via a %s with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$tainted = preg_replace('/\'/', '', $tainted);
$query = sprintf("name='%s'", $tainted);
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>