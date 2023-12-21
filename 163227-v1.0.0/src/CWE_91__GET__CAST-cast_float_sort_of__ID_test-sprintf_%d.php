<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : cast via + = 0.0
construction : use of sprintf via a %d
*/
$tainted = $_GET['UserData'];
$tainted += 0.0 ;
$query = sprintf("//User[@id=%d]", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>