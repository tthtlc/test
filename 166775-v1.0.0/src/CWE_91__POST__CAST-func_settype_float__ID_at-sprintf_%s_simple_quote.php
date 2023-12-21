<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : settype (float)
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_POST['UserData'];
if(settype($tainted, "float"))
  $tainted = $tainted ;
else
  $tainted = 0.0 ;
$query = sprintf("//User[@id='%s']", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>