<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : check if there is only numbers
construction : use of sprintf via a %d with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$re = "/^[0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$var = http_redirect(sprintf("pages/'%d'.php", $tainted));
?>