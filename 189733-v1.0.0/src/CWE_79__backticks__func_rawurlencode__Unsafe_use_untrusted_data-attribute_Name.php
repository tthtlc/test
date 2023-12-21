<!-- 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
SANITIZE : use of rawurlencode
File : unsafe, use of untrusted data in an attribute name
-->
<!DOCTYPE html>
<html>
<body>
<?php
$tainted = `cat /tmp/tainted.txt`;
$tainted = rawurlencode($tainted);
//flaw
echo "<div ". $tainted ."= bob />" ;
?>
<h1>Hello World!</h1>
</div>
</body>
</html>