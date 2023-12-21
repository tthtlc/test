<?php
/* 
Unsafe sample
input : get the field userData from the variable $_GET via an object
sanitize : none
construction : concatenation with simple quote
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
$var = http_redirect("'" . $tainted . "'");
?>