<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
Flushes content of $sanitized if the filter number_float_filter is not applied
construction : concatenation
*/
$tainted = $_POST['UserData'];
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "SELECT Trim(a.FirstName) & ' ' & Trim(a.LastName) AS employee_name, a.city, a.street & (' ' +a.housenum) AS address FROM Employees AS a  WHERE a.supervisor=". $tainted . "";
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