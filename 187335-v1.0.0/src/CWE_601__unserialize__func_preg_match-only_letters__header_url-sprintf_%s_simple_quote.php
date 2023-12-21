<?php
/* 
Unsafe sample
input : Get a serialize string in POST and unserialize it
sanitize : check if there is only letters
construction : use of sprintf via a %s with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$re = "/^[a-zA-Z]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
//flaw
$var = header(sprintf("Location: '%s'", $tainted));
?>