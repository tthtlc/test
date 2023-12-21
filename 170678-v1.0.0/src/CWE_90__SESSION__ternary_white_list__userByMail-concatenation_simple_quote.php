<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : use of ternary condition
construction : concatenation with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = "(&(objectCategory=person)(objectClass=user)(mail='". $tainted . "'))";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>