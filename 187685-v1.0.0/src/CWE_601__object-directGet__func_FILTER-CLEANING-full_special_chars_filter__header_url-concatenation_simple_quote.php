<?php
/* 
Unsafe sample
input : get the field userData from the variable $_GET via an object
Uses a full_special_chars_filter via filter_var function
construction : concatenation with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$sanitized = filter_var($tainted, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $tainted = $sanitized ;
     
//flaw
$var = header("'Location: " . $tainted ."'");
?>