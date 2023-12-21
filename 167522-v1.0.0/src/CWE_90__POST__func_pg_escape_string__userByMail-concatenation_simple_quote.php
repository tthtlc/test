<?php
/* 
Unsafe sample
input : get the field UserData from the variable $_POST
SANITIZE : use of pg_escape_string
construction : concatenation with simple quote
*/
$tainted = $_POST['UserData'];
$tainted = pg_escape_string($tainted);
$query = "(&(objectCategory=person)(objectClass=user)(mail='". $tainted . "'))";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>