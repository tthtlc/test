<!-- 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
SANITIZE : use of preg_replace
File : use of untrusted data in a double quoted event handler in a script
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = `cat /tmp/tainted.txt`;
$tainted = preg_replace('/\'/', '', $tainted);
//flaw
echo "<div onmouseover=\"x=\"". $tainted ."\"\>";
?>
<h1>Hello World!</h1>
</div>
</body>
</html>