<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : use of intval
construction : interpretation
*/
$tainted = $_SESSION['UserData'];
$tainted = intval($tainted);
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