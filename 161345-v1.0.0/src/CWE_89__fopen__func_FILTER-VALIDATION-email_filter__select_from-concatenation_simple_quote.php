<?php
/* 
Unsafe sample
input : use fopen to read /tmp/tainted.txt and put the first line in $tainted
Flushes content of $sanitized if the filter email_filter is not applied
construction : concatenation with simple quote
*/
$handle = @fopen("/tmp/tainted.txt", "r");
if ($handle) {
  if(($tainted = fgets($handle, 4096)) == false) {
    $tainted = "";
  }
  fclose($handle);
} else {
  $tainted = "";
}
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "SELECT * FROM '". $tainted . "'";
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