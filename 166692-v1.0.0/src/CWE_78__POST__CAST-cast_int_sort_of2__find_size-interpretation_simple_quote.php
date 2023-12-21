<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : cast via + = 0
construction : interpretation with simple quote
*/
$tainted = $_POST['UserData'];
$tainted = $tainted + 0;
$query = "find / size ' $tainted '";
$ret = system($query);
?>