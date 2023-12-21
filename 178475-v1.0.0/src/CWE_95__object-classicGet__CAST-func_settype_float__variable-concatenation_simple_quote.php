<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : settype (float)
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
if(settype($tainted, "float"))
  $tainted = $tainted ;
else
  $tainted = 0.0 ;
$query = "$temp = '". $tainted . "';";
$res = eval($query);
?>