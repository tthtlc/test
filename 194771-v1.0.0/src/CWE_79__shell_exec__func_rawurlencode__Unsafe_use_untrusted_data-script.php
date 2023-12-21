<!-- 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
SANITIZE : use of rawurlencode
File : unsafe, use of untrusted data in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = rawurlencode($tainted);
//flaw
echo $tainted ;
?>
</script>
</head>
<body onload="xss()">
<h1>Hello World!</h1>
</body>
</html>