<?php
/* 
Unsafe sample
input : get the $_GET['userData'] in an array
sanitize : use of the function htmlspecialchars. Sanitizes the query but has a high chance to produce unexpected results
construction : use of sprintf via a %s with simple quote
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
$tainted = htmlspecialchars($tainted, ENT_QUOTES);
$query = sprintf("name='%s'", $tainted);
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>