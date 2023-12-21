<!-- 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : use of the function htmlspecialchars. Sanitizes the query but has a high chance to produce unexpected results
File : use of untrusted data in a simple quoted string in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_POST['UserData'];
$tainted = htmlspecialchars($tainted, ENT_QUOTES);
echo "alert('". $tainted ."')" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>