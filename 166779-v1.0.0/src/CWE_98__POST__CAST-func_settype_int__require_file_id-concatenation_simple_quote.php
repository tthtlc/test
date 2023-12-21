<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : use of settype_int
construction : concatenation with simple quote
*/
$tainted = $_POST['UserData'];
if (settype($tainted, "integer"))
  $tainted = $tainted ;
else
  $tainted = 0 ;
$var = require("pages/'". $tainted . "'.php");
?>