<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
Flushes content of $sanitized if the filter number_float_filter is not applied
construction : interpretation
*/
$tainted = `cat /tmp/tainted.txt`;
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "//User[@id= $tainted ]";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>