#!/usr/bin/php
<?php
$i = 1;
$res = array_filter(explode(' ',$argv[1]));
while ($i < sizeof($res))
{
  echo $res[$i]." ";
  $i++;
}
echo $res[0];
 ?>
