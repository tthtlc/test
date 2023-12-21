<?php
/* 
Unsafe sample
input : get the field userData from the variable $_GET via an object
sanitize : none
construction : interpretation with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
//no_sanitizing
//flaw
$var = include("pages/'$tainted'.php");
?>