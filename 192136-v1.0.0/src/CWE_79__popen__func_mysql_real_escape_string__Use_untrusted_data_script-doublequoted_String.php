<!-- 
Unsafe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
SANITIZE : use of mysql_real_escape string
File : use of untrusted data in a double quoted string in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$tainted = mysql_real_escape_string($tainted);
//flaw
echo "alert(\"". $tainted ."\")" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>