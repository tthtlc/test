<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : check if there is only letters and/or numbers
construction : concatenation with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$re = "/^[a-zA-Z0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = "ls '". $tainted . "'";
$ret = system($query);
?>