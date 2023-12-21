<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
SANITIZE : use in_array to check if $tainted is in the white list
construction : concatenation with simple quote
*/
$tainted = $_POST['UserData'];
$legal_table = array("safe1", "safe2");
if (in_array($tainted, $legal_table, true)) {
  $tainted = $tainted;
} else {
  $tainted = $legal_table[0];
}
$query = "!name='". $tainted . "'";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>