#!/usr/bin/php
<?php
  if($argc == 2){
  $parts = preg_split('/\s+/', $argv[1]);
    if ($parts[0] == "Lundi")
        $parts[0] = "Monday";
    else if ($parts[0] == "Mardi")
        $parts[0] = "Tuesday";
    else if ($parts[0] == "Mercredi")
        $parts[0] = "Wednesday";
    else if ($parts[0] == "Jeudi")
        $parts[0] = "Thursday";
    else if ($parts[0] == "Vendredi")
        $parts[0] = "Friday";
    else if ($parts[0] == "Samedi")
        $parts[0] = "Saturday";
    else if ($parts[0] == "Dimanche")
        $parts[0] = "Sunday";
    else{
      echo "Wrong Format\n";
      exit();
    }

    if ($parts[2] == "Janvier")
        $parts[2] = "January";
    else if ($parts[2] == "Février")
        $parts[2] = "February";
    else if ($parts[2] == "Mars")
        $parts[2] = "March";
    else if ($parts[2] == "Avril")
        $parts[2] = "April";
    else if ($parts[2] == "Mai")
        $parts[2] = "May";
    else if ($parts[2] == "Juin")
        $parts[2] = "June";
    else if ($parts[2] == "Juillet")
        $parts[2] = "July";
    else if ($parts[2] == "Aout")
        $parts[2] = "August";
    else if ($parts[2] == "Septembre")
        $parts[2] = "September";
    else if ($parts[2] == "Octobre")
        $parts[2] = "October";
    else if ($parts[2] == "Novembre")
        $parts[2] = "November";
    else if ($parts[2] == "Décembre")
        $parts[2] = "December";
    else
    {
      echo "Wrong Format\n";
      exit();
    }
    $array = $parts[0].' '.$parts[1].' '.$parts[2].' '.$parts[3].' '.$parts[4];
    $date = new DateTime($array);
      echo $date->format('U')."\n";
  }
  else
  exit();
?>
