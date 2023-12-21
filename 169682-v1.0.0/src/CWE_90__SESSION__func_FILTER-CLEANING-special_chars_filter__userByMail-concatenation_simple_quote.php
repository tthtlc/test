<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
Uses a special_chars_filter via filter_var function
construction : concatenation with simple quote
*/
$tainted = $_SESSION['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;
      
$query = "(&(objectCategory=person)(objectClass=user)(mail='". $tainted . "'))";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>