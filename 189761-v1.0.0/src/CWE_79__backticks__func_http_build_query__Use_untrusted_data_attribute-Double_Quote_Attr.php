<!-- 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
SANITIZE : use of http_build_query
File : use of untrusted data in a doubled quote attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = `cat /tmp/tainted.txt`;
$tainted = http_build_query($tainted);
echo "<div id=\"". $tainted ."\">content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>