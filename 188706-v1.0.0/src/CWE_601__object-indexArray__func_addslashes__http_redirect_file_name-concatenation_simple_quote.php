<?php
/* 
Unsafe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
sanitize : use of the function addslashes
construction : concatenation with simple quote
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
$tainted = addslashes($tainted);
//flaw
$var = http_redirect("'" . $tainted . ".php'");
?>