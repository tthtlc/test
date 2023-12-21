<?php
/* 
Unsafe sample
input : get the UserData field of $_SESSION
sanitize : use of the function htmlspecialchars. Sanitizes the query but has a high chance to produce unexpected results
construction : interpretation with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = htmlspecialchars($tainted, ENT_QUOTES);
$query = "(&(objectCategory=person)(objectClass=user)(cn=' $tainted '))";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>