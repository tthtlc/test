<!-- 
Unsafe sample
input : use fopen to read /tmp/tainted.txt and put the first line in $tainted
sanitize : use of the function addslashes
File : unsafe, use of untrusted data in a comment
-->
<!DOCTYPE html>
<html>
<head>
<!--
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
$tainted = addslashes($tainted);
//flaw
echo $tainted ;
?>
-->
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>