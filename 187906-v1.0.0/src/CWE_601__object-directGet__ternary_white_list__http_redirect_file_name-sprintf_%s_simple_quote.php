<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : use of ternary condition
construction : use of sprintf via a %s with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$var = http_redirect(sprintf("'%s'.php", $tainted));
?>