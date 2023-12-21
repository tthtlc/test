<?php
/* 
Unsafe sample
input : get the UserData field of $_SESSION
sanitize : use of the function addslashes
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = addslashes($tainted);
$query = sprintf("name='%s'", $tainted);
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>