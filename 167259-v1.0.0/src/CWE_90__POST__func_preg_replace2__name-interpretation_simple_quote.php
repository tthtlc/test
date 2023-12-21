<?php
/* 
Unsafe sample
input : get the field UserData from the variable $_POST
SANITIZE : use of preg_replace with another regex
construction : interpretation with simple quote
*/
$tainted = $_POST['UserData'];
$tainted = preg_replace('/\W/si','',$tainted);
$query = "name=' $tainted '";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>