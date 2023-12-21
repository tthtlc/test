<!-- 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : cast in float
File : unsafe, use of untrusted data in an tag name
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = `cat /tmp/tainted.txt`;
$tainted = (float) $tainted ;
echo "<".  $tainted ." href= \"/bob\" />" ;
?>
<h1>Hello World!</h1>
</body>
</html>