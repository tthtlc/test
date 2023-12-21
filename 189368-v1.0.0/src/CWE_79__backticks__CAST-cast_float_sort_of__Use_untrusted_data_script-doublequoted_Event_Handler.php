<!-- 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : cast via + = 0.0
File : use of untrusted data in a double quoted event handler in a script
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = `cat /tmp/tainted.txt`;
$tainted += 0.0 ;
echo "<div onmouseover=\"x=\"". $tainted ."\"\>";
?>
<h1>Hello World!</h1>
</div>
</body>
</html>