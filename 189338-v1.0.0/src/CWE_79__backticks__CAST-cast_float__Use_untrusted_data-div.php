<!-- 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : cast in float
File : use of untrusted data in a div tag
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<div>
<?php
$tainted = `cat /tmp/tainted.txt`;
$tainted = (float) $tainted ;
echo $tainted ;
?>
</div>
<h1>Hello World!</h1>
</body>
</html>