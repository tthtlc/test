<!-- 
Safe sample
input : use fopen to read /tmp/tainted.txt and put the first line in $tainted
sanitize : cast via + = 0
File : use of untrusted data in a div tag
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<div>
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
echo $tainted ;
?>
</div>
<h1>Hello World!</h1>
</body>
</html>