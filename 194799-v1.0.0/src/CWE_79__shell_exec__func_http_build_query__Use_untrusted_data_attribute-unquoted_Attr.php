<!-- 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
SANITIZE : use of http_build_query
File : use of untrusted data in a unquoted attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = http_build_query($tainted);
//flaw
echo "<div id=". $tainted .">content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>