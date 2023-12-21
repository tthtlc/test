<?php
/* 
Unsafe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : use of the function addslashes
construction : use of sprintf via a %s with simple quote
*/
$tainted = system('ls', $retval);
$tainted = addslashes($tainted);
$query = sprintf("(&(objectCategory=person)(objectClass=user)(mail='%s'))", $tainted);
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>