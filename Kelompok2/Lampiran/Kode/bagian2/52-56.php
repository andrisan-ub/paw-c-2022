<?php

$s = 'FILKOM UB';
echo strlen($s); // menghitung jumlah huruf pada string

echo "<br>";
$s = 'FILKOM UB';
echo strtolower($s); // mengubah string menjadi huruf kecil

echo "<br>";

$s = 'filkom ub';
echo strtoupper($s); // mengubah string menjadi huruf kapital

echo "<br>";

$s = ' FILKOM UB ';
echo trim($s);  // memotong space sisa

echo "<br>";

$s1 = 'FILKOM ';
$s2 = 'UB';
$s3 = $s1 . $s2; 
echo $s3; // menggabungkan dua string menjadi satu

?>