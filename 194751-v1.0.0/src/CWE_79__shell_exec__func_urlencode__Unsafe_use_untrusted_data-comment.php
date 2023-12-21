<!-- 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
SANITIZE : use of urlencode
File : unsafe, use of untrusted data in a comment
-->
<!DOCTYPE html>
<html>
<head>
<!--
<?php
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = urlencode($tainted);
//flaw
echo $tainted ;
?>
-->
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>