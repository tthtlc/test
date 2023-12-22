<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : use of settype_int
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
if (settype($tainted, "integer"))
  $tainted = $tainted ;
else
  $tainted = 0 ;
$query = "find / size ' $tainted '";
$ret = system($query);
?>