<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
Uses a full_special_chars_filter via filter_var function
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_GET['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $tainted = $sanitized ;
     
$query = sprintf("SELECT * FROM '%s'", $tainted);
//flaw
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