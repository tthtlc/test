<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
Uses a magic_quotes_filter via filter_var function
construction : concatenation with simple quote
*/
$tainted = $_GET['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_MAGIC_QUOTES);
  $tainted = $sanitized ;
      
$query = "(&(objectCategory=person)(objectClass=user)(cn='". $tainted . "'))";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>