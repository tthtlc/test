<?php
/* 
Unsafe sample
input : get the field userData from the variable $_GET via an object
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
construction : interpretation with simple quote
*/
class Input{
  private $input;
  public function getInput(){
    return $this->input;
  }
  public  function __construct(){
   $this->input = $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = htmlentities($tainted, ENT_QUOTES);
//flaw
$var = http_redirect("'$tainted'.php");
?>