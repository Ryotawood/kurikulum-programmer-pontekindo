<?php
// echo "-----------Menghitung luas persegi ----------- :";
// echo "Ketikkan sisi persegi :";
// $sisi = trim (fgets(STDIN));
// $luas = $sisi * $sisi;
// echo "Sisi : $sisi" . PHP_EOL;
// echo "Luas : sisi * sisi\nLuas : $sisi * $sisi =$luas" . PHP_EOL;

echo "\n===== Menghitung Persegi Panjang ===== :\n";
echo "Input panjang :";
$panjang = trim (fgets(STDIN));
echo "Input lebar :";
$lebar = trim (fgets(STDIN));
$luas = $panjang * $lebar;
$keliling = 2 * $panjang + 2*$lebar;
echo "Luas persegi panjang". $luas . "\n";
echo "Keliling persegi panjang: " . $keliling . "\n";

