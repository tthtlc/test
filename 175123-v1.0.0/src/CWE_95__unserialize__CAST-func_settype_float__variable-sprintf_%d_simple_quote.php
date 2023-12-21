<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : settype (float)
construction : use of sprintf via a %d with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
if(settype($tainted, "float"))
  $tainted = $tainted ;
else
  $tainted = 0.0 ;
$query = sprintf("$temp = '%d';", $tainted);
$res = eval($query);
?>