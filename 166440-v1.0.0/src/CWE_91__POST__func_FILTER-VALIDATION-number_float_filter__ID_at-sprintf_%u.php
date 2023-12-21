<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
Flushes content of $sanitized if the filter number_float_filter is not applied
construction : use of sprintf via a %u
*/
$tainted = $_POST['UserData'];
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = sprintf("//User[@id=%u]", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>