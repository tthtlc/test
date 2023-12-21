<!-- 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
SANITIZE : use of http_build_query
File : use of untrusted data in a double quoted event handler in a script
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = http_build_query($tainted);
echo "<div onmouseover=\"x=\"". $tainted ."\"\>";
?>
<h1>Hello World!</h1>
</div>
</body>
</html>