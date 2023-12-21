<?php
/* 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : use of the function addslashes
construction : interpretation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$tainted = addslashes($tainted);
$query = "(&(objectCategory=person)(objectClass=user)(mail=' $tainted '))";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>