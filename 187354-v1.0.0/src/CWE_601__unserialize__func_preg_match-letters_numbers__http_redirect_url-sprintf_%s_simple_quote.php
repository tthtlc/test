<?php
/* 
Unsafe sample
input : Get a serialize string in POST and unserialize it
sanitize : check if there is only letters and/or numbers
construction : use of sprintf via a %s with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$re = "/^[a-zA-Z0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
//flaw
$var = http_redirect(sprintf("'%s'", $tainted));
?>