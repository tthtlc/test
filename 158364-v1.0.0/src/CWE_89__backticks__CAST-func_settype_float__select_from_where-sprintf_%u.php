<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : settype (float)
construction : use of sprintf via a %u
*/
$tainted = `cat /tmp/tainted.txt`;
if(settype($tainted, "float"))
  $tainted = $tainted ;
else
  $tainted = 0.0 ;
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