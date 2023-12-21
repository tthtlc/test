<?php
/* 
Safe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
SANITIZE : use preg_replace to keep only char, number and _ ,\, -
construction : interpretation with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$tainted = preg_replace( "/[^a-zA-Z0-9_\ -]/", "", $tainted );
$query = "(&(objectCategory=person)(objectClass=user)(cn=' $tainted '))";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>