<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use of pg_escape_literal
construction : concatenation with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = pg_escape_literal($tainted);
$query = "!name='". $tainted . "'";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>