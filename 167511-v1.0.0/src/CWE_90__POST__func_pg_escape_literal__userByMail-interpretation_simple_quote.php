<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
SANITIZE : use of pg_escape_literal
construction : interpretation with simple quote
*/
$tainted = $_POST['UserData'];
$tainted = pg_escape_literal($tainted);
$query = "(&(objectCategory=person)(objectClass=user)(mail=' $tainted '))";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>