<!-- 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : use of intval
File : unsafe, use of untrusted data in a comment
-->
<!DOCTYPE html>
<html>
<head>
<!--
<?php
$tainted = `cat /tmp/tainted.txt`;
$tainted = intval($tainted);
echo $tainted ;
?>
-->
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>