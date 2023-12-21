<?php
/*
/* 
Safe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
SANITIZE : uses of ESAPI, an OWASP API
construction : interpretation with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$ESAPI = new ESAPI();
ESAPI::setEncoder(new DefaultEncoder());
ESAPI::setValidator(new DefaultValidator());
//verifying the data with ESAPI
if($ESAPI->validator->isValidNumber("Course ID", $tainted, 18, 25, false)) {
  $tainted = $tainted;
} else {
  $tainted = 0; //default value
}
$query = "SELECT * FROM student where id=' $tainted '";
$conn = mysql_connect('localhost', 'mysql_user', 'mysql_password'); //Connection to the database (address, user, password)
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $checked_data);
$stmt->execute();
mysql_close($conn);
 ?>