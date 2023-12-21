<!-- 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : use of intval
File : use of untrusted data in a unquoted attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = intval($tainted);
echo "<div id=". $tainted .">content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>