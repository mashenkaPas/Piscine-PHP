#!/usr/bin/php
<?php
function ft_is_sort($str)
{
  $i=0;
  $sortarray=sort($str);
  while ( $i <sizeof($str))
  {
    if(strcmp($sortarray[$i],$str[$i] != 0))
      return false;
    else
      $i++;
  }

  return(true);
}

 ?>
