<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
sanitize : use of settype_int
construction : interpretation
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
if (settype($tainted, "integer"))
  $tainted = $tainted ;
else
  $tainted = 0 ;
$query = "SELECT * FROM COURSE c WHERE c.id IN (SELECT idcourse FROM REGISTRATION WHERE idstudent= $tainted )";
$conn = mysql_connect('localhost', 'mysql_user', 'mysql_password'); // Connection to the database (address, user, password)
mysql_select_db('dbname') ;
echo "query : ". $query ."<br /><br />" ;
$res = mysql_query($query); //execution
while($data =mysql_fetch_array($res)){
print_r($data) ;
echo "<br />" ;
} 
mysql_close($conn);
?>