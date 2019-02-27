#!/usr/bin/php
<?php
  if(!file_exists($argv[1]) && $argc < 2)
  {
    exit();
  }
  $myfile = fopen($argv[1],"r") or die ("unable to open a file ");
  $array = "";
  while ($myfile && !feof($myfile))
  {
    $array .= fgets($myfile);
  }
  fclose($myfile);

  function upper($matches) {
    return strtoupper($matches[0]);
  }

  function modify($matches) {
    return preg_replace_callback("/>.*$/" , 'upper', $matches[0]);
  }
  $tmp  = preg_replace_callback("/[^title=\"][\w\s]*\"/" , 'upper', $array);
  $data  = preg_replace_callback("/<a.*?>(.*?)(?=<)/" , 'modify', $tmp);
  echo $data;
?>
