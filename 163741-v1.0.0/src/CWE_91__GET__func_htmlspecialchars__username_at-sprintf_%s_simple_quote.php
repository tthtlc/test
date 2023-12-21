<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : use of the function htmlspecialchars. Sanitizes the query but has a high chance to produce unexpected results
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = htmlspecialchars($tainted, ENT_QUOTES);
$query = sprintf("//User[@username='%s']", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>