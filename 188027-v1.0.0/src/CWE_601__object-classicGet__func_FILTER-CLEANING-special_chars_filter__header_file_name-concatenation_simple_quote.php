<?php
/* 
Unsafe sample
input : get the field userData from the variable $_GET via an object
Uses a special_chars_filter via filter_var function
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
$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;
      
//flaw
$var = header("'Location: " . $tainted .".php'");
?>