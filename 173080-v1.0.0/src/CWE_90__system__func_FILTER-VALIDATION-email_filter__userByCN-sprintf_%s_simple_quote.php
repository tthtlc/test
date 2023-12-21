<?php
/* 
Unsafe sample
input : execute a ls command using the function system, and put the last result in $tainted
Flushes content of $sanitized if the filter email_filter is not applied
construction : use of sprintf via a %s with simple quote
*/
$tainted = system('ls', $retval);
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