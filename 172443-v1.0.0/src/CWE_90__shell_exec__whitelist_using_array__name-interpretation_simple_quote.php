<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
SANITIZE : use in_array to check if $tainted is in the white list
construction : interpretation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$legal_table = array("safe1", "safe2");
if (in_array($tainted, $legal_table, true)) {
  $tainted = $tainted;
} else {
  $tainted = $legal_table[0];
}
$query = "name=' $tainted '";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>