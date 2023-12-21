<!-- 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : cast via + = 0.0
File : use of untrusted data in one side of a quoted expression in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = system('ls', $retval);
$tainted += 0.0 ;
echo "x='". $tainted ."'" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>