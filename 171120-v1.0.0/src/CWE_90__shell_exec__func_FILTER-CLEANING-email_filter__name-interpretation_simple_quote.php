<?php
/* 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
Uses an email_filter via filter_var function
construction : interpretation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "name=' $tainted '";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>