<?php
/* 
Unsafe sample
input : get the field userData from the variable $_GET via an object
SANITIZE : use of pg_escape_string
construction : concatenation with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = pg_escape_string($tainted);
$query = "name='". $tainted . "'";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>