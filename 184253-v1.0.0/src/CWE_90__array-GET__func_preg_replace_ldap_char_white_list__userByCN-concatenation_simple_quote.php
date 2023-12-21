<?php
/* 
Safe sample
input : get the $_GET['userData'] in an array
SANITIZE : use preg_replace to keep only char, number and _ ,\, -
construction : concatenation with simple quote
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
$tainted = preg_replace( "/[^a-zA-Z0-9_\ -]/", "", $tainted );
$query = "(&(objectCategory=person)(objectClass=user)(cn='". $tainted . "'))";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>