<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : use of the function addslashes
construction : use of sprintf via a %s with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = addslashes($tainted);
$var = require(sprintf("'%s'.php", $tainted));
?>