<?php
/* 
Unsafe sample
input : execute a ls command using the function system, and put the last result in $tainted
Flushes content of $sanitized if the filter email_filter is not applied
construction : use of sprintf via a %s with simple quote
*/
$tainted = system('ls', $retval);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
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