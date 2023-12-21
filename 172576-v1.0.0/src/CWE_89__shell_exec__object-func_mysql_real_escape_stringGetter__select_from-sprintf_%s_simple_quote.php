<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : use mysql_real_escape_string via an object and a classic getter
construction : use of sprintf via a %s with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
class Sanitize{
  private $data;
  public function __construct($input){
    $this->data = $input ;
  }
  public function getData(){
    return $this->data;
  }
  public function sanitize(){
    $this->data = mysql_real_escape_string($this->data) ;
  }
}
$sanitizer = new Sanitize($tainted) ;
$sanitizer->sanitize();
$tainted = $sanitizer->getData(); 
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