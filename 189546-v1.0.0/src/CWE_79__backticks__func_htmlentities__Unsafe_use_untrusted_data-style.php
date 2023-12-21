<!-- 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
File : unsafe, use of untrusted data in CSS
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$tainted = `cat /tmp/tainted.txt`;
$tainted = htmlentities($tainted, ENT_QUOTES);
//flaw
echo $tainted ;
?>
</style>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>