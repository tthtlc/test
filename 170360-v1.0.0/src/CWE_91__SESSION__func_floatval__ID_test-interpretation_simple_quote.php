<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : use of floatval
construction : interpretation with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = floatval($tainted);
$query = "//User[@id=' $tainted ']";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>