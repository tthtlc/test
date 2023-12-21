<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : use of settype_int
construction : use of sprintf via a %d with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
if (settype($tainted, "integer"))
  $tainted = $tainted ;
else
  $tainted = 0 ;
$var = header(sprintf("Location: pages/'%d'.php", $tainted));
?>