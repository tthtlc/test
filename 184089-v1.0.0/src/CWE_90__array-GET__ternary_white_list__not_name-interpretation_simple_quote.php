<?php
/* 
Safe sample
input : get the $_GET['userData'] in an array
sanitize : use of ternary condition
construction : interpretation with simple quote
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = "!name=' $tainted '";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>