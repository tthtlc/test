<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
Uses a special_chars_filter via filter_var function
construction : use of sprintf via a %s with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;
      
$query = sprintf("(&(objectCategory=person)(objectClass=user)(cn='%s'))", $tainted);
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>