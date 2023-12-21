<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : cast into int
construction : concatenation with simple quote
*/
class Input{
  private $input;
  public function getInput(){
    return $this->input;
  }
  public  function __construct(){
   $this->input = $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = (int) $tainted ;
$query = "find / size '". $tainted . "'";
$ret = system($query);
?>