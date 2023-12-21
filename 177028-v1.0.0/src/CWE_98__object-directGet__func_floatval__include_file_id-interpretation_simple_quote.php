<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : use of floatval
construction : interpretation with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = floatval($tainted);
$var = include("pages/'$tainted'.php");
?>