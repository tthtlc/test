<?php
/* 
Unsafe sample
input : get the UserData field of $_SESSION
SANITIZE : use of preg_replace with another regex
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = preg_replace('/\W/si','',$tainted);
$query = sprintf("!name='%s'", $tainted);
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>