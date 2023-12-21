<?php
/*
/* 
Safe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
SANITIZE : uses indirect reference
construction : right verification
*/
class Input{
  private $input;
  public function getInput(){
    return $this->input[1];
  }
  public  function __construct(){
    $this->input = array();
    $this->input[0]= 'safe' ;
    $this->input[1]= $_GET['UserData'] ;
    $this->input[2]= 'safe' ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$course_array = array();
//get the user id
$user_id = intval($_SESSION[‘user_id’]);
//creation of the references with only data allowed to the user
$result = mysql_query("SELECT * FROM COURSE where course.allowed = {$user_id}");
while ($row = mysql_fetch_array($result)){
  $course_array[] = $result[‘id’];
}
$_SESSION[‘course_array’] = $course_array;
if (isset($_SESSION[‘course_array’])){
  $course_array = $_SESSION[‘course_array’];
  if (isset($course_array[$taintedId])){
    //indirect reference > get the right id
    $tainted = $course_array[$tainted];
  }
}
else {
  $tainted = 0; //default value
}
$query = "SELECT * FROM COURSE, USER WHERE courseID='$tainted'";
$query .= "AND course.allowed=$_SESSION[userid]";
$conn = mysql_connect('localhost', 'mysql_user', 'mysql_password'); //Connection to the database (address, user, password)
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $checked_data);
$stmt->execute();
mysql_close($conn);
 ?>