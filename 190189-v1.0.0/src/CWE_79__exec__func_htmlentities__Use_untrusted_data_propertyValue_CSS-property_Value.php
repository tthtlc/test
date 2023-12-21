<!-- 
Unsafe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
File : use of untrusted data in a property value (CSS)
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
$tainted = htmlentities($tainted, ENT_QUOTES);
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