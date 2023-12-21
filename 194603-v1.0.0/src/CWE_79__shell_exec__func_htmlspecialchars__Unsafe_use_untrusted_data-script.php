<!-- 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : use of the function htmlspecialchars. Sanitizes the query but has a high chance to produce unexpected results
File : unsafe, use of untrusted data in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = htmlspecialchars($tainted, ENT_QUOTES);
//flaw
echo $tainted ;
?>
</script>
</head>
<body onload="xss()">
<h1>Hello World!</h1>
</body>
</html>