<!-- 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
SANITIZE : use of preg_replace
File : unsafe, use of untrusted data in an tag name
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = `cat /tmp/tainted.txt`;
$tainted = preg_replace('/\'/', '', $tainted);
//flaw
echo "<".  $tainted ." href= \"/bob\" />" ;
?>
<h1>Hello World!</h1>
</body>
</html>