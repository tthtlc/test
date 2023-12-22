<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : cast via + = 0.0
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
$tainted += 0.0 ;
$var = require(sprintf("pages/'%d'.php", $tainted));
?>