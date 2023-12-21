<!-- 
Safe sample
input : get the field UserData from the variable $_POST
SANITIZE : use of http_build_query
File : use of untrusted data in one side of a double quoted expression in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_POST['UserData'];
$tainted = http_build_query($tainted);
echo "x=\"". $tainted."\"" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>