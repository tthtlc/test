<?php
/* 
Unsafe sample
input : get the field UserData from the variable $_POST
Uses an email_filter via filter_var function
construction : interpretation with simple quote
*/
$tainted = $_POST['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "!name=' $tainted '";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>