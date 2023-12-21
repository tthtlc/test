<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
SANITIZE : use preg_replace to keep only char, number and _ ,\, -
construction : use of sprintf via a %s with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = preg_replace( "/[^a-zA-Z0-9_\ -]/", "", $tainted );
$query = sprintf("!name='%s'", $tainted);
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>