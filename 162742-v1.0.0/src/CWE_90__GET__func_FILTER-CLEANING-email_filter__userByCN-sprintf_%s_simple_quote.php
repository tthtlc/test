<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
Uses an email_filter via filter_var function
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_GET['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = sprintf("(&(objectCategory=person)(objectClass=user)(cn='%s'))", $tainted);
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>