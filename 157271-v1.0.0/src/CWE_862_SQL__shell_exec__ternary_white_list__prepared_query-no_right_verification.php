<?php
/*
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : use of ternary condition
construction : prepared query and no right verification
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = "SELECT * FROM COURSE WHERE id=?";
$conn = mysql_connect('localhost', 'mysql_user', 'mysql_password'); //Connection to the database (address, user, password)
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $checked_data);
$stmt->execute();
mysql_close($conn);
 ?>