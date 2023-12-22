<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
Flushes content of $sanitized if the filter number_float_filter is not applied
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
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$var = include(sprintf("pages/'%d'.php", $tainted));
?>