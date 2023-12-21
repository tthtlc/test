<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
Uses a special_chars_filter via filter_var function
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_GET['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;
      
$query = sprintf("user[username='%s']", $tainted);
//flaw
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>