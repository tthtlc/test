<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
SANITIZE : use preg_replace to keep only char, number and _ ,\, -
construction : interpretation with simple quote
*/
$tainted = $_POST['UserData'];
$tainted = preg_replace( "/[^a-zA-Z0-9_\ -]/", "", $tainted );
$query = "(&(objectCategory=person)(objectClass=user)(cn=' $tainted '))";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>