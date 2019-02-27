#!/usr/bin/php
<?php
function ft_split($str)
{
 $res = array_filter(explode(' ',$str));
 return($res);
}
function get_asc($char)
{

  if ((ord($char)>= 65) &&(ord ($char)<=90) )
    return(ord($char)+32);
  if ((ord($char)<=47 ) || ord($char)>= 123 || (ord($char)>=58 && ord($char)<=64)  || (ord($char)>=91 && ord($char)<=96) )
      return(ord($char) + 1000);
  if(ord($char)>= 48 && ord($char) <=57)
    return(ord ($char)+300);
  return(ord($char));
}

function mysort($a , $b)
{
  $i = 0;
  if ($a == $b)
    return (0);
  while ($i < strlen($a) && $i < strlen($b))
  {
    if (get_asc($a[$i])< get_asc($b[$i]) )
      return(-1);
    if (get_asc($a[$i]) > get_asc($b[$i]) )
      return(1);
    $i++;
  }
    if(strlen($a) > strlen($b) )
      return(1);
    else
     return(-1);
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
usort($array, "mysort");
foreach ($array as $value)
{
  echo $value."\n";
}









 ?>
