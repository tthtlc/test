<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : use of ternary condition
construction : use of sprintf via a %d with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = sprintf("SELECT * FROM student where id='%d'", $tainted);
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