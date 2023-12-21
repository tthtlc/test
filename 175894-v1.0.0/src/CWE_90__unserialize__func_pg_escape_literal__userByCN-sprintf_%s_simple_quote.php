<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
SANITIZE : use of pg_escape_literal
construction : use of sprintf via a %s with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = pg_escape_literal($tainted);
$query = sprintf("(&(objectCategory=person)(objectClass=user)(cn='%s'))", $tainted);
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>