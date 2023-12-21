<?php
/* 
Unsafe sample
input : get the UserData field of $_SESSION
SANITIZE : use of pg_escape_string
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = pg_escape_string($tainted);
$query = sprintf("!name='%s'", $tainted);
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>