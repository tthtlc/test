<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : check if there is only letters and/or numbers
construction : interpretation with simple quote
*/
$tainted = $_GET['UserData'];
$re = "/^[a-zA-Z0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = "(&(objectCategory=person)(objectClass=user)(cn=' $tainted '))";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>