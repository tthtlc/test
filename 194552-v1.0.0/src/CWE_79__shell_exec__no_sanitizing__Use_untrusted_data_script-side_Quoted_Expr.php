<!-- 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : none
File : use of untrusted data in one side of a quoted expression in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = shell_exec('cat /tmp/tainted.txt');
//no_sanitizing
//flaw
echo "x='". $tainted ."'" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>