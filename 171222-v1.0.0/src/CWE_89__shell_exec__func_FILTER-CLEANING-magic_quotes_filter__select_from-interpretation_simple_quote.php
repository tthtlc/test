<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
Uses a magic_quotes_filter via filter_var function
construction : interpretation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$sanitized = filter_var($tainted, FILTER_SANITIZE_MAGIC_QUOTES);
  $tainted = $sanitized ;
      
$query = "SELECT * FROM ' $tainted '";
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