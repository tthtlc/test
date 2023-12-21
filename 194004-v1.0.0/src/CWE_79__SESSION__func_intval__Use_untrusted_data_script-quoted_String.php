<!-- 
Safe sample
input : get the UserData field of $_SESSION
sanitize : use of intval
File : use of untrusted data in a simple quoted string in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_SESSION['UserData'];
$tainted = intval($tainted);
echo "alert('". $tainted ."')" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>