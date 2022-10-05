<?php

$numbers = [
    ['satu', 1],
    ['dua', 2],
    ['tiga', 3]
];

foreach ($numbers as $number) {
    foreach ($number as $value) {
        echo $value . '<br>';
    }
}

?>