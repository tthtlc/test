<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : use of intval
construction : interpretation
*/
$tainted = $_POST['UserData'];
$tainted = intval($tainted);
$query = "//User[@id= $tainted ]";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>