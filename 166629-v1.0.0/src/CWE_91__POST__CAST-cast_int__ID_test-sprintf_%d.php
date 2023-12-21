<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : cast into int
construction : use of sprintf via a %d
*/
$tainted = $_POST['UserData'];
$tainted = (int) $tainted ;
$query = sprintf("//User[@id=%d]", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>