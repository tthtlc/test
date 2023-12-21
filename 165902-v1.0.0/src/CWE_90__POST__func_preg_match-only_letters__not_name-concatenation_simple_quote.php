<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : check if there is only letters
construction : concatenation with simple quote
*/
$tainted = $_POST['UserData'];
$re = "/^[a-zA-Z]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = "!name='". $tainted . "'";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>