<!-- 
Unsafe sample
input : get the field UserData from the variable $_POST
sanitize : none
File : use of untrusted data in a simple quoted string in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_POST['UserData'];
//no_sanitizing
//flaw
echo "alert('". $tainted ."')" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>