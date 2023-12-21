<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : cast via + = 0
construction : interpretation with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted += 0 ;
$var = header("Location: pages/'$tainted'.php");
?>