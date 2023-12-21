<?php
/* 
Unsafe sample
input : use fopen to read /tmp/tainted.txt and put the first line in $tainted
Uses a full_special_chars_filter via filter_var function
construction : use of sprintf via a %s with simple quote
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
$sanitized = filter_var($tainted, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $tainted = $sanitized ;
     
//flaw
$var = include(sprintf("'%s'.php", $tainted));
?>