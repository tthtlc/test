<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
sanitize : use of ternary condition
construction : use of sprintf via a %s with simple quote
*/
class Input{
  private $input;
  public function getInput(){
    return $this->input['realOne'];
  }
  public  function __construct(){
    $this->input = array();
    $this->input['test']= 'safe' ;
    $this->input['realOne']= $_GET['UserData'] ;
    $this->input['trap']= 'safe' ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = sprintf("SELECT * FROM COURSE c WHERE c.id IN (SELECT idcourse FROM REGISTRATION WHERE idstudent='%s')", $tainted);
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