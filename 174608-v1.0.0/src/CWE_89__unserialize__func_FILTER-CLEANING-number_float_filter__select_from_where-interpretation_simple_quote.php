<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
Uses a number_float_filter via filter_var function
construction : interpretation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$sanitized = filter_var($tainted, FILTER_SANITIZE_NUMBER_FLOAT);
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "SELECT * FROM student where id=' $tainted '";
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