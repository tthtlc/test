<!-- 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : cast into int
File : use of untrusted data in the body
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = `cat /tmp/tainted.txt`;
$tainted = (int) $tainted ;
echo $tainted ;
?>
<h1>Hello World!</h1>
</body>
</html>
