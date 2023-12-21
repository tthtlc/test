<!-- 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
SANITIZE : use of http_build_query
File : use of untrusted data in a simple quoted string in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = http_build_query($tainted);
echo "alert('". $tainted ."')" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>