<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : use mysql_real_escape_string via an object
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_SESSION['UserData'];
class Sanitize{
  public function sanitize($input){
    return mysql_real_escape_string($input);
  }
}
$temp = new Sanitize();
$tainted = $temp->sanitize($tainted);
$query = sprintf("SELECT * FROM '%s'", $tainted);
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