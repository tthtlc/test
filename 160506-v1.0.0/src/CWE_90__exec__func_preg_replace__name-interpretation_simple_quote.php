<?php
/* 
Unsafe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
SANITIZE : use of preg_replace
construction : interpretation with simple quote
*/
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
$tainted = preg_replace('/\'/', '', $tainted);
$query = "name=' $tainted '";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>