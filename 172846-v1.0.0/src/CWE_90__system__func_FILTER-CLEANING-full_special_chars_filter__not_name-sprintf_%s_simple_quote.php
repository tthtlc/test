<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
Uses a full_special_chars_filter via filter_var function
construction : use of sprintf via a %s with simple quote
*/
$tainted = system('ls', $retval);
$sanitized = filter_var($tainted, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $tainted = $sanitized ;
     
$query = sprintf("!name='%s'", $tainted);
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>