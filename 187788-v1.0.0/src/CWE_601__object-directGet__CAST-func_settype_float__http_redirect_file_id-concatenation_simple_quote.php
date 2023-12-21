<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : settype (float)
construction : concatenation with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
if(settype($tainted, "float"))
  $tainted = $tainted ;
else
  $tainted = 0.0 ;
$var = http_redirect("pages/'". $tainted . "'.php");
?>