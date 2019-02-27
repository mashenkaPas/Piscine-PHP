#!/usr/bin/php
<?php
function ft_split($str)
{
 $res = array_filter(explode(' ',$str));
 return($res);
}

$i = 1;
$array = array();
while($i < $argc)
{
  $first = ft_split($argv[$i]);
  foreach ($first as $value) {
    array_push($array,$value );
  }
  $i++;
}

sort($array);
foreach ($array as $value)
{
  echo $value."\n";
}
 ?>
