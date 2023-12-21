<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
Uses a magic_quotes_filter via filter_var function
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_POST['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_MAGIC_QUOTES);
  $tainted = $sanitized ;
      
$query = sprintf("//User[username/text()='%s']", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>