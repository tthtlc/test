<?php
/* 
Unsafe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : regular expression accepts everything
construction : use of sprintf via a %s with simple quote
*/
$tainted = system('ls', $retval);
$re = "/^.*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = sprintf("(&(objectCategory=person)(objectClass=user)(mail='%s'))", $tainted);
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>