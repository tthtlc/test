<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
Flushes content of $sanitized if the filter number_float_filter is not applied
construction : interpretation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "//User[@id=' $tainted ']";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>