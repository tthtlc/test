<!-- 
Safe sample
input : use fopen to read /tmp/tainted.txt and put the first line in $tainted
sanitize : use of intval
File : use of untrusted data in a unquoted attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
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
$tainted = intval($tainted);
echo "<div id=". $tainted .">content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>