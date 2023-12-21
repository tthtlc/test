<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
construction : concatenation with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = htmlentities($tainted, ENT_QUOTES);
$query = "cat '". $tainted . "'";
$ret = system($query);
?>