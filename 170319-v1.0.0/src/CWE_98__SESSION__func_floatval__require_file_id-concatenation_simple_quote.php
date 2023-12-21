<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : use of floatval
construction : concatenation with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = floatval($tainted);
$var = require("pages/'". $tainted . "'.php");
?>