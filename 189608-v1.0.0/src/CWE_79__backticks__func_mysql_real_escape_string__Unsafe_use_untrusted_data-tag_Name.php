<!-- 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
SANITIZE : use of mysql_real_escape string
File : unsafe, use of untrusted data in an tag name
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = `cat /tmp/tainted.txt`;
$tainted = mysql_real_escape_string($tainted);
//flaw
echo "<".  $tainted ." href= \"/bob\" />" ;
?>
<h1>Hello World!</h1>
</body>
</html>