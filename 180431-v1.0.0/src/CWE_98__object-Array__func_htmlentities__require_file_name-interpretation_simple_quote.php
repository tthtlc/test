<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
construction : interpretation with simple quote
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
$var = require("'$tainted'.php");
?>