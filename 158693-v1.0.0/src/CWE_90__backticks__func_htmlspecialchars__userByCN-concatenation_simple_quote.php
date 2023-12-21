<?php
/* 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : use of the function htmlspecialchars. Sanitizes the query but has a high chance to produce unexpected results
construction : concatenation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$tainted = htmlspecialchars($tainted, ENT_QUOTES);
$query = "(&(objectCategory=person)(objectClass=user)(cn='". $tainted . "'))";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>