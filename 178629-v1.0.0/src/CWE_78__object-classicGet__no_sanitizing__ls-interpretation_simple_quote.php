<?php
/* 
Unsafe sample
input : get the field userData from the variable $_GET via an object
sanitize : none
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
//no_sanitizing
$query = "ls ' $tainted '";
//flaw
$ret = system($query);
?>