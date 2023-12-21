<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
SANITIZE : use of mysql_real_escape string
construction : use of sprintf via a %u
*/
$tainted = `cat /tmp/tainted.txt`;
$tainted = mysql_real_escape_string($tainted);
$query = sprintf("//User[@id=%u]", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>