<?php
// echo "-----------Menghitung luas persegi ----------- :";
// echo "Ketikkan sisi persegi :";
// $sisi = trim (fgets(STDIN));
// $luas = $sisi * $sisi;
// echo "Sisi : $sisi" . PHP_EOL;
// echo "Luas : sisi * sisi\nLuas : $sisi * $sisi =$luas" . PHP_EOL;
echo "=== Menghitun bangun tidur===\n";
echo "Pilih bangun tidur:\n";
echo "1. Persegi panjang\n";
echo "2. Segitiga\n";
echo "3. Lingkaran\n";
echo "Pilih Bangun tidur: ";
$bangun = trim(fgets(STDIN));

if ($bangun == 1) {
echo "\n===== Menghitung Persegi Panjang ===== :\n";
echo "Input panjang :";
$panjang = trim (fgets(STDIN));
echo "Input lebar :";
$lebar = trim (fgets(STDIN));
$luas = $panjang * $lebar;
$keliling = 2 * $panjang + 2*$lebar;
echo "Luas persegi panjang : $luas\n";
echo "Keliling persegi panjang : $keliling\n";
} else if ($bangun == 2) {
echo "\n===== SEGITIGA =====\n";
echo "Masukkan alas :";
$alas = trim(fgets(STDIN));
echo "Masukkan tinggi :";
$tinggi = trim(fgets(STDIN));
echo "Masukkan sisi 1 :";
$sisi1 = trim(fgets(STDIN));
echo "Masukkan sisi 2 :";
$sisi2 = trim(fgets(STDIN));
echo "Masukkan sisi 3 :";
$sisi3 = trim(fgets(STDIN));
    $luas = 0.5 * $alas * $tinggi;
    $keliling = $sisi1 + $sisi2 + $sisi3;

    echo "Luas segitiga : $luas\n";
    echo "Keliling segitiga : $keliling\n";
} else if ($bangun == 3) {
    echo "\n===== LINGKARAN =====\n";
    echo "Masukkan jari-jari : ";
    $jariJari = trim(fgets(STDIN));

    $luas = 3.14 * $jariJari * $jariJari;
    $keliling = 2 * 3.14 * $jariJari;

    echo "Luas lingkaran : $luas\n";
    echo "Keliling lingkaran : $keliling\n";
} else {
    echo "Bangun dlu baru milih\n";
}