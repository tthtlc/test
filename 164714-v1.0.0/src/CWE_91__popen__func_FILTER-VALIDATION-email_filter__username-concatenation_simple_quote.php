<?php
/* 
Unsafe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
Flushes content of $sanitized if the filter email_filter is not applied
construction : concatenation with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "user[username='". $tainted . "']";
//flaw
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>