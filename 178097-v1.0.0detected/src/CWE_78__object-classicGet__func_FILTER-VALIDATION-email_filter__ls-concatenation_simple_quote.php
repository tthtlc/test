<?php
/* 
Unsafe sample
input : get the field userData from the variable $_GET via an object
Flushes content of $sanitized if the filter email_filter is not applied
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
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "ls '". $tainted . "'";
//flaw
$ret = system($query);
?>