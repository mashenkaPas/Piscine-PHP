#!/usr/bin/php
<?php
  while (true) {
      echo "Enter a number: " ;
      $line = fgets(STDIN);
      if ($line == FALSE)
        exit();
      $line = trim($line);
      if( is_numeric($line) && !is_float($line + 0)) {
        if($line % 2 == 0)
          echo "The number $line is even\n";
        else
          echo "The number $line is odd\n";
      } else
        echo "'$line' is not a number\n";
}
?>
