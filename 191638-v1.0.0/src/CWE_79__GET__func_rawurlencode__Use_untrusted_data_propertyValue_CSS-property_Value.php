<!-- 
Unsafe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use of rawurlencode
File : use of untrusted data in a property value (CSS)
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$tainted = $_GET['UserData'];
$tainted = rawurlencode($tainted);
//flaw
echo "body { color :". $tainted ." ; }" ;
?>
 </style> 
 </script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>