<!-- 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : cast in float
File : use of untrusted data in a simple quoted string in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = `cat /tmp/tainted.txt`;
$tainted = (float) $tainted ;
echo "alert('". $tainted ."')" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>