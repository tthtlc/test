<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : cast via + = 0
construction : interpretation
*/
$tainted = $_GET['UserData'];
$tainted += 0 ;
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