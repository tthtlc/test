<!-- 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : use of intval
File : use of untrusted data in the body
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = $_POST['UserData'];
$tainted = intval($tainted);
echo $tainted ;
?>
<h1>Hello World!</h1>
</body>
</html>
