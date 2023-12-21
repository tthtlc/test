<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : cast in float
construction : use of sprintf via a %d with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = (float) $tainted ;
$var = http_redirect(sprintf("pages/'%d'.php", $tainted));
?>