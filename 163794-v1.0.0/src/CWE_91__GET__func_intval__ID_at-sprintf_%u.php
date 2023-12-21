<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : use of intval
construction : use of sprintf via a %u
*/
$tainted = $_GET['UserData'];
$tainted = intval($tainted);
$query = sprintf("//User[@id=%u]", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>