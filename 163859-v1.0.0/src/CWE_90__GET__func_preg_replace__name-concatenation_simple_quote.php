<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use of preg_replace
construction : concatenation with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = preg_replace('/\'/', '', $tainted);
$query = "name='". $tainted . "'";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>