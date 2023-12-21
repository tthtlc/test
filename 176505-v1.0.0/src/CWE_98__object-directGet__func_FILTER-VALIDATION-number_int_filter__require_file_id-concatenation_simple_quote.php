<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
Flushes content of $sanitized if the filter number_int_filter is not applied
construction : concatenation with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$var = require("pages/'". $tainted . "'.php");
?>