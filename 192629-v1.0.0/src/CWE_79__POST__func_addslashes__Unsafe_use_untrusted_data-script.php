<!-- 
Unsafe sample
input : get the field UserData from the variable $_POST
sanitize : use of the function addslashes
File : unsafe, use of untrusted data in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_POST['UserData'];
$tainted = addslashes($tainted);
//flaw
echo $tainted ;
?>
</script>
</head>
<body onload="xss()">
<h1>Hello World!</h1>
</body>
</html>