#!/usr/bin/php
<?php
date_default_timezone_set('America/Los_Angeles'); //1) set title to local time
$file = fopen("/var/run/utmpx", "r");            //open and reading utemp
while ($utmpx = fread($file, 628))                //looping file until records are read, each record is 628 byte
{
    $unpack = unpack("a256user/a4id/a32term/ipid/ilogin/I2time/a256host/i16future", $utmpx);    //unpack the utmpx file, a is string, i is integer, capital I is unsigned interger 2 imes (time 1 is timestam)
    $tty[$unpack['term']] = $unpack;                                                            //put unpack hashmap into tty hashmap called tty, term is each tty and $unpack is the whole value of the individual record, that is $unpack (tty is hasmap, with a value of another hashmap, key is terminal name and value is the full record (unpack record))
}
ksort($tty);                                    //ksort is the key sort, terminal names
foreach ($tty as $elem){                            //going through $elem/unpack (hashmap of the record), going through unpack hashmap
    if ($elem['login'] == 7) {                        //for each we look at login, whenever it equls 7 prcess created by user, we start pulling stuff and displaying it
        echo str_pad(substr(trim($elem['user']), 0, 8), 8, " ")." ";     //first we display the user which is 256 bytes
        echo str_pad(substr(trim($elem['term']), 0, 8), 8, " ")." ";    //second is the terminal name
        echo date("M", $elem["time1"]);                                //
        echo str_pad(date("j", $elem["time1"]), 3, " ", STR_PAD_LEFT)." ".date("H:i", $elem["time1"]);
        echo "\n";
        }
}
