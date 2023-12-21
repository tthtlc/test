<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : use of ternary condition
construction : concatenation with simple quote
*/
$tainted = system('ls', $retval);
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = "name='". $tainted . "'";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>