<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : settype (float)
construction : concatenation with simple quote
*/
$tainted = $_SESSION['UserData'];
if(settype($tainted, "float"))
  $tainted = $tainted ;
else
  $tainted = 0.0 ;
$var = http_redirect("pages/'". $tainted . "'.php");
?>