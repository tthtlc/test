<?php
/* 
Unsafe sample
input : get the field userData from the variable $_GET via an object
sanitize : regular expression accepts everything
construction : interpretation with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$re = "/^.*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
//flaw
$var = require("'$tainted'.php");
?>