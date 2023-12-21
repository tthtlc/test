<?php
/* 
Unsafe sample
input : get the field userData from the variable $_GET via an object
sanitize : none
construction : use of sprintf via a %d with simple quote
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
//no_sanitizing
//flaw
$var = header(sprintf("Location: pages/'%d'.php", $tainted));
?>