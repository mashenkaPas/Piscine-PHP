#!/usr/bin/php
<?PHP
if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	exit();
}

if (strpos($argv[1],'+'))
{
  $sign ='+';
}
else if(strpos($argv[1],'*')){
  $sign = '*';
}
else if(strpos($argv[1],'-'))
$sign = "-";
else if(strpos($argv[1],'/'))
$sign = "/";
else if(strpos($argv[1],'%'))
$sign = "%";
else{
  echo "Syntax Error\n";
  exit();
}
$array = array_filter(explode($sign, $argv[1]));
$var1 = trim($array[0] , " \t");
$var2 = trim($array[1] , " \t");
if (!is_numeric($var1) || !is_numeric($var2)) {
  echo "Syntax Error\n";
  exit();
}
switch ($sign) {
    case ("*") :
        echo $var1 * $var2;
        break;
    case ("+") :
        echo $var1 + $var2;
        break;
    case ("-") :
        echo $var1 - $var2;
        break;
    case ("/") :
        echo $var1 / $var2;
        break;
    case ("%") :
        echo $var1 % $var2;
        break;
    default:
        echo "Incorrect Parameters\n";
        exit();
  }
  echo "\n";

?>
