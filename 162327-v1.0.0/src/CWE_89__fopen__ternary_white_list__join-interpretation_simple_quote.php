<?php
/* 
Safe sample
input : use fopen to read /tmp/tainted.txt and put the first line in $tainted
sanitize : use of ternary condition
construction : interpretation with simple quote
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
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = "SELECT lastname, firstname FROM drivers, vehicles WHERE drivers.id = vehicles.ownerid AND vehicles.tag=' $tainted '";
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