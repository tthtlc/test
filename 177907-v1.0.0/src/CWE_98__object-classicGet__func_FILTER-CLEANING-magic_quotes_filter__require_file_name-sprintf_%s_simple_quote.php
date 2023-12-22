<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
Uses a magic_quotes_filter via filter_var function
construction : use of sprintf via a %s with simple quote
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
$sanitized = filter_var($tainted, FILTER_SANITIZE_MAGIC_QUOTES);
  $tainted = $sanitized ;
      
$var = require(sprintf("'%s'.php", $tainted));
?>