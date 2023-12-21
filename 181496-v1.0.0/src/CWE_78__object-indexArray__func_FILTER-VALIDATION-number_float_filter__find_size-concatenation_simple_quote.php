<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
Flushes content of $sanitized if the filter number_float_filter is not applied
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
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "find / size '". $tainted . "'";
$ret = system($query);
?>