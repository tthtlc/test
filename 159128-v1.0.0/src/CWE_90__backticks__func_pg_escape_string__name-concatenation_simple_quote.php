<?php
/* 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
SANITIZE : use of pg_escape_string
construction : concatenation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$tainted = pg_escape_string($tainted);
$query = "name='". $tainted . "'";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>