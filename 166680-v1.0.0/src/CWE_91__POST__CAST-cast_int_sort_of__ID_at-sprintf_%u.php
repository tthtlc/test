<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : cast via + = 0
construction : use of sprintf via a %u
*/
$tainted = $_POST['UserData'];
$tainted += 0 ;
$query = sprintf("//User[@id=%u]", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>