#!/usr/bin/php
<?php
  if($argc==2)
  {
    $str = array_values(array_filter(explode(" ", $argv[1])));
    for ($i=0; $i < sizeof($str) ; $i++)
    {
      if($i == sizeof($str) - 1)
        echo $str[$i]."\n";
      else
        echo $str[$i]." ";
    }
  }
?>
