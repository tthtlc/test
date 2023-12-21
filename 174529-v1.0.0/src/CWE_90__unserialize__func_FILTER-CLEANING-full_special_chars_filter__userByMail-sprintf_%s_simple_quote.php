<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
Uses a full_special_chars_filter via filter_var function
construction : use of sprintf via a %s with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$sanitized = filter_var($tainted, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $tainted = $sanitized ;
     
$query = sprintf("(&(objectCategory=person)(objectClass=user)(mail='%s'))", $tainted);
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>