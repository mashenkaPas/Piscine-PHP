<<?php

  $ch = curl_init( "file:///nfs/2018/m/mpas/day00/ex00/basics.html");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
  $content = curl_exec($ch);
  // var_dump($content);
  $array = array_filter(explode("\n", $content));
  // var_dump($content);
  // var_dump($array);
  $tags = array_values(preg_grep("/<img src=.*?>/", $array));
  // var_dump($tags);
  $https = array();
foreach ($tags as $value) {
  // var_dump($value);
  $val = array_filter(explode(" ", $value));
  // var_dump($val);
  $var = array_values(preg_grep("/src=\".*?\"/", $val));
  // var_dump($var);
  array_push($https, $var[0]);
}
var_dump($https);
mkdir($argv[1], 0777);
foreach ($https as $value) {
  $filehttp = substr($value, 5, strlen($value) - 6);
  $ind = strrchr($filehttp, "/");
  var_dump($ind);
  $filename = substr($filehttp, (integer)$ind);
  var_dump($filename);
  $ch = curl_init($filehttp);
  $fp = fopen($argv[1]."/".$filename, "wb");
  curl_setopt($ch, CURLOPT_FILE, $fp);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_exec($ch);
  curl_close($ch);
  fclose($fp);
}

  curl_close($ch);


 ?>
