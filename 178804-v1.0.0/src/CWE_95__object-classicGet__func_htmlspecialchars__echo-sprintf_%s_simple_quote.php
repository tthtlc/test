<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : use of the function htmlspecialchars. Sanitizes the query but has a high chance to produce unexpected results
construction : use of sprintf via a %s with simple quote
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
$tainted = htmlspecialchars($tainted, ENT_QUOTES);
$query = sprintf("echo $'%s';", $tainted);
$res = eval($query);
?>