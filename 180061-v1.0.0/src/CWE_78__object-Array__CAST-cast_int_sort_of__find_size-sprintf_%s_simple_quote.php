<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
sanitize : cast via + = 0
construction : use of sprintf via a %s with simple quote
*/
class Input{
  private $input;
  public function getInput(){
    return $this->input[1];
  }
  public  function __construct(){
    $this->input = array();
    $this->input[0]= 'safe' ;
    $this->input[1]= $_GET['UserData'] ;
    $this->input[2]= 'safe' ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted += 0 ;
$query = sprintf("find / size '%d'", $tainted);
$ret = system($query);
?>