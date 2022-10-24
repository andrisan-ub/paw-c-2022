<?php

$n = 12;
echo "You are the $n th person";
echo "You are the {$n}th person";

$var = 'world';
$$var = 100;
echo 'Hello $var<br>';
echo "Hello $var<br>";
echo "Hello $world<br>";
echo "Hello $world<br>";

$s = 'Hello';
echo $s[0]; 
echo $s[-1]; 