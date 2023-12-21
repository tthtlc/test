<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
SANITIZE : use of preg_replace
construction : interpretation with simple quote
*/
class Input{
  private $input;
  public function getInput(){
    return $this->input['realOne'];
  }
  public  function __construct(){
    $this->input = array();
    $this->input['test']= 'safe' ;
    $this->input['realOne']= $_GET['UserData'] ;
    $this->input['trap']= 'safe' ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = preg_replace('/\'/', '', $tainted);
$query = "echo $'$tainted';";
$res = eval($query);
?>