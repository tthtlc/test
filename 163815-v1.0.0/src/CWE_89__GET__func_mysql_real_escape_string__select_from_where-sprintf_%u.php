<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use of mysql_real_escape string
construction : use of sprintf via a %u
*/
$tainted = $_GET['UserData'];
$tainted = mysql_real_escape_string($tainted);
$query = sprintf("SELECT * FROM student where id=%u", $tainted);
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