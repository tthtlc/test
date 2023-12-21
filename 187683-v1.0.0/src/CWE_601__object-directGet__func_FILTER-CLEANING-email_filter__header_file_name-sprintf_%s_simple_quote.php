<?php
/* 
Unsafe sample
input : get the field userData from the variable $_GET via an object
Uses an email_filter via filter_var function
construction : use of sprintf via a %s with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
$var = header(sprintf("Location: '%s'.php", $tainted));
?>