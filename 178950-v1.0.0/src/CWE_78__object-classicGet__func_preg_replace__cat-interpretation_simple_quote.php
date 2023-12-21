<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
SANITIZE : use of preg_replace
construction : interpretation with simple quote
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
$tainted = preg_replace('/\'/', '', $tainted);
$query = "cat ' $tainted '";
$ret = system($query);
?>