<?php

$a = 10;
$b = 3;

var_dump($a + $b); // 13
var_dump($a - $b); // 7
var_dump($a * $b); // 30
var_dump($a / $b); // 3.333333...
var_dump($a % $b); // 1
var_dump($a ** $b); // 1000 (since PHP 5.6)
var_dump(-$a); // -1

echo "<br>";

$a = 3 + 4 + 5 - 2;
echo $a . "<br>";
$a = 13;
echo $a . "<br>";
$a += 14;
echo $a . "<br>";
$a -= 2;
echo $a . "<br>";
$a *= 4;
echo $a . "<br>";

// but be carefull
//$a = ‘1’; //akan terjadi error
$b = 2;
echo $b . "<br>";
//$c = $a + b; // ini akan terjadi eror
$d = $a . $b; // nilai bernilai 100 karena merujuk pada variabel terakhir yaitu pada baris ke 23
echo $d;


?>