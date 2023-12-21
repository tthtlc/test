<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : cast via + = 0
construction : concatenation with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = $tainted + 0;
$query = "find / size '". $tainted . "'";
$ret = system($query);
?>