<?php
/*
/* 
Safe sample
input : get the UserData field of $_SESSION
SANITIZE : uses of ESAPI, an OWASP API
construction : interpretation with simple quote
*/
$tainted = $_SESSION['UserData'];
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