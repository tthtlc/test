<!-- 
Safe sample
input : use fopen to read /tmp/tainted.txt and put the first line in $tainted
sanitize : cast via + = 0
File : use of untrusted data in one side of a quoted expression in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$handle = @fopen("/tmp/tainted.txt", "r");
if ($handle) {
  if(($tainted = fgets($handle, 4096)) == false) {
    $tainted = "";
  }
  fclose($handle);
} else {
  $tainted = "";
}
$tainted = $tainted + 0;
echo "x='". $tainted ."'" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>