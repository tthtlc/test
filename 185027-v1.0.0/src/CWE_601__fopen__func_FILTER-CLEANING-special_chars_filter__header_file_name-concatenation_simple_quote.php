<?php
/* 
Unsafe sample
input : use fopen to read /tmp/tainted.txt and put the first line in $tainted
Uses a special_chars_filter via filter_var function
construction : concatenation with simple quote
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
$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;
      
//flaw
$var = header("'Location: " . $tainted .".php'");
?>