<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
Uses a full_special_chars_filter via filter_var function
construction : concatenation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$sanitized = filter_var($tainted, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $tainted = $sanitized ;
     
$query = "!name='". $tainted . "'";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>