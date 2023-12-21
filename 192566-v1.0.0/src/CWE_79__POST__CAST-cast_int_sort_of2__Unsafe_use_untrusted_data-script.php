<!-- 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : cast via + = 0
File : unsafe, use of untrusted data in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_POST['UserData'];
$tainted = $tainted + 0;
echo $tainted ;
?>
</script>
</head>
<body onload="xss()">
<h1>Hello World!</h1>
</body>
</html>