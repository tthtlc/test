<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
construction : interpretation with simple quote
*/
$tainted = $_POST['UserData'];
$tainted = htmlentities($tainted, ENT_QUOTES);
$query = "' $tainted '";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>