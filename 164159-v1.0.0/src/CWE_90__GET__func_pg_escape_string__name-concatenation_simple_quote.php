<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use of pg_escape_string
construction : concatenation with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = pg_escape_string($tainted);
$query = "name='". $tainted . "'";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>