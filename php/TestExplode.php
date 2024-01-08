<?php

$x ="Hello php world !";
list($arr, $sec) = explode(" ", $x);
print_r("arr: ". $arr); echo "\n";
print_r("sec : " . $sec); echo "\n";

$x = 12345;
$arr = explode(" ", $x);
print_r($arr); echo "\n";

$x = false;
$arr = explode(" ", $x);
print_r($arr); echo "\n";

$x = 12.345;
$arr = explode(" ", $x);
print_r($arr); echo "\n";

$x = null;
$arr = explode(" ", $x);
print_r($arr); echo "\n";
//
// $x = ["hello", "php", "world", "!"];
// $arr = explode(" ", $x);
// print_r($arr); echo "\n";

$specificTime = DateTime::createFromFormat('Y-m-d H:i:s.u', '2023-01-01 12:34:56.789');
// Get the Unix timestamp with microseconds
$microtime = $specificTime->format('u');
echo "microtime : " . $microtime . "\n";
// Extract the microseconds part
$microseconds = "0." . strval($microtime);
echo "microseconds : ". $microseconds . "\n";


// list($usec, $sec) = explode(" ", microtime());
$x =substr($microseconds, 2, 3);
echo "x : " . $x . "\n";

$datestr = $specificTime->format('YmdHis') . $x; //YYYYMMDDHHMMSSSSS
echo "datestr : " . $datestr . "\n";

$datestr_con = substr($datestr, 0, 14) . substr($datestr, 15, 2); //YYYYMMDDHHMMSSxSS 중간의 x값은 버림(milli second의 첫번째 자리수)
echo "datestr_con : " . $datestr_con . "\n";