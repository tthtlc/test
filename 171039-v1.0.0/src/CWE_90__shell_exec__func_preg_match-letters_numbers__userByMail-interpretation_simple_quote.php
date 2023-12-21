<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : check if there is only letters and/or numbers
construction : interpretation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$re = "/^[a-zA-Z0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = "(&(objectCategory=person)(objectClass=user)(mail=' $tainted '))";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>