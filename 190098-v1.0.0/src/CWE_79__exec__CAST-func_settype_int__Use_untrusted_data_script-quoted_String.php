<!-- 
Safe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
sanitize : use of settype_int
File : use of untrusted data in a simple quoted string in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
if (settype($tainted, "integer"))
  $tainted = $tainted ;
else
  $tainted = 0 ;
echo "alert('". $tainted ."')" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>