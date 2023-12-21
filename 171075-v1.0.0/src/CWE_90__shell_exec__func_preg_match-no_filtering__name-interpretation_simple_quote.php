<?php
/* 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : regular expression accepts everything
construction : interpretation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$re = "/^.*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = "name=' $tainted '";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>