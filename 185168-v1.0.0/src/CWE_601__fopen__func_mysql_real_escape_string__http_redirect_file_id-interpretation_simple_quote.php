<?php
/* 
Unsafe sample
input : use fopen to read /tmp/tainted.txt and put the first line in $tainted
SANITIZE : use of mysql_real_escape string
construction : interpretation with simple quote
*/
$handle = @fopen("/tmp/tainted.txt", "r");
if ($handle) {
  if(($tainted = fgets($handle, 4096)) == false) {
    $tainted = "";
  }
  fclose($handle);
} else {
  $tainted = "";
}
$tainted = mysql_real_escape_string($tainted);
//flaw
$var = http_redirect("pages/'$tainted'.php");
?>