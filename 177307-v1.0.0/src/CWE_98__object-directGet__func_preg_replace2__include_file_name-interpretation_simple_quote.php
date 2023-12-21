<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
SANITIZE : use of preg_replace with another regex
construction : interpretation with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = preg_replace('/\W/si','',$tainted);
$var = include("'$tainted'.php");
?>