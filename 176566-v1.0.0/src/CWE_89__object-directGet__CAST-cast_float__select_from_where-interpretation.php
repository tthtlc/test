<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : cast in float
construction : interpretation
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = (float) $tainted ;
$query = "SELECT * FROM student where id= $tainted ";
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