<!-- 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
SANITIZE : use of preg_replace with another regex
File : use of untrusted data in a doubled quote attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = preg_replace('/\W/si','',$tainted);
echo "<div id=\"". $tainted ."\">content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>