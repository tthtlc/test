<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
SANITIZE : use preg_replace to keep only char, number and _ ,\, -
construction : concatenation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = preg_replace( "/[^a-zA-Z0-9_\ -]/", "", $tainted );
$query = "(&(objectCategory=person)(objectClass=user)(cn='". $tainted . "'))";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>