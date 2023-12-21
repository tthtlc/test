<?php
/* 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
SANITIZE : use of preg_replace
construction : concatenation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = preg_replace('/\'/', '', $tainted);
$query = "(&(objectCategory=person)(objectClass=user)(mail='". $tainted . "'))";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>