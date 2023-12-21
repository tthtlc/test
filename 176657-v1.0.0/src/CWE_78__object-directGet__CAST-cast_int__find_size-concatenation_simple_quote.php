<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : cast into int
construction : concatenation with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = (int) $tainted ;
$query = "find / size '". $tainted . "'";
$ret = system($query);
?>