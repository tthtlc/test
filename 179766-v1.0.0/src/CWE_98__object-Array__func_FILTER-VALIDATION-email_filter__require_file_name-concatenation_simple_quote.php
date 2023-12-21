<?php
/* 
Unsafe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
Flushes content of $sanitized if the filter email_filter is not applied
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
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
$var = require("'". $tainted . ".php'");
?>