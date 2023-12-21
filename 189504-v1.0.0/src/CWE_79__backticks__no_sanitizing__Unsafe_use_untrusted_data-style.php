<!-- 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : none
File : unsafe, use of untrusted data in CSS
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$tainted = `cat /tmp/tainted.txt`;
//no_sanitizing
//flaw
echo $tainted ;
?>
</style>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>