#!/usr/bin/php
<?php
  if ($argc < 3) {
    exit();
  }
  $tofind = $argv[1];
  unset($argv[0], $argv[1]);

  foreach ($argv as $value) {
    $newval = explode(":", $value);
    if ($newval[0] == $tofind) {
      echo $newval[1]."\n";
    }
  }

?>
