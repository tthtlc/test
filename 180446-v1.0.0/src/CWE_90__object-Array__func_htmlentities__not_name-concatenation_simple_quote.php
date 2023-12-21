<?php
/* 
Unsafe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
construction : concatenation with simple quote
*/
class Input{
  private $input;
  public function getInput(){
    return $this->input[1];
  }
  public  function __construct(){
    $this->input = array();
    $this->input[0]= 'safe' ;
    $this->input[1]= $_GET['UserData'] ;
    $this->input[2]= 'safe' ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = htmlentities($tainted, ENT_QUOTES);
$query = "!name='". $tainted . "'";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>