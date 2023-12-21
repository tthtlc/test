<?php
/* 
Unsafe sample
input : get the field userData from the variable $_GET via an object
Flushes content of $sanitized if the filter email_filter is not applied
construction : interpretation with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "ls ' $tainted '";
//flaw
$ret = system($query);
?>