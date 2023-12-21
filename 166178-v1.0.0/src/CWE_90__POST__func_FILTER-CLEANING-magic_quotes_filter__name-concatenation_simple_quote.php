<?php
/* 
Unsafe sample
input : get the field UserData from the variable $_POST
Uses a magic_quotes_filter via filter_var function
construction : concatenation with simple quote
*/
$tainted = $_POST['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_MAGIC_QUOTES);
  $tainted = $sanitized ;
      
$query = "name='". $tainted . "'";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>