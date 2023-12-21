<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : settype (float)
construction : interpretation with simple quote
*/
$tainted = $_POST['UserData'];
if(settype($tainted, "float"))
  $tainted = $tainted ;
else
  $tainted = 0.0 ;
$var = header("Location: pages/'$tainted'.php");
?>