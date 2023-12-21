<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : use of ternary condition
construction : concatenation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = "SELECT * FROM student where id='". $tainted . "'";
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