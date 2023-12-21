<?php
/*
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
SANITIZE : use in_array to check if $tainted is in the white list
construction : prepared query and right verification
*/
class Input{
  private $input;
  public function getInput(){
    return $this->input;
  }
  public  function __construct(){
   $this->input = $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$legal_table = array("safe1", "safe2");
if (in_array($tainted, $legal_table, true)) {
  $tainted = $tainted;
} else {
  $tainted = $legal_table[0];
}
$query = "SELECT * FROM COURSE, USER WHERE courseID=?";
$query .= "AND course.allowed=$_SESSION[userid]";
$conn = mysql_connect('localhost', 'mysql_user', 'mysql_password'); //Connection to the database (address, user, password)
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $checked_data);
$stmt->execute();
mysql_close($conn);
 ?>