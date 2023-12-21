<?php
/* 
Unsafe sample
input : get the field UserData from the variable $_POST
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_POST['UserData'];
$tainted = htmlentities($tainted, ENT_QUOTES);
$query = sprintf("(&(objectCategory=person)(objectClass=user)(cn='%s'))", $tainted);
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>