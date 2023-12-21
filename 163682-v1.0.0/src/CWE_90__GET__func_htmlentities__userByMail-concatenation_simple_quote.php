<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
construction : concatenation with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = htmlentities($tainted, ENT_QUOTES);
$query = "(&(objectCategory=person)(objectClass=user)(mail='". $tainted . "'))";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>