<?php
// echo "-----------Menghitung luas persegi -----------\n";
// echo "Ketikkan sisi persegi :";
// $sisi = trim (fgets(STDIN));
// $luas = $sisi * $sisi;
// echo "Sisi : $sisi" . PHP_EOL;
// echo "Luas : sisi * sisi\nLuas : $sisi * $sisi =$luas" . PHP_EOL;

echo "=== Menghitung bangun tidur===\n";
echo "Pilih bangun tidur:\n";
echo "1. Layangan\n";
echo "2. Belah Kelapa\n";
echo "3. Trapesium\n";
echo "4. Jajar Genjreng\n";
echo "Pilih Bangun tidur: ";
$bangun = trim(fgets(STDIN));

if ($bangun == 1) {
    echo "== LAYANG-LAYANG ==\n";
    echo "Masukkan a : ";
    $a = trim(fgets(STDIN));
    echo "Masukkan b : ";
    $b = trim(fgets(STDIN));

    $luas = 0.5 * $a * $b;
    $keliling = ($a + $b) * 2  ;

    Echo "==== Hasil ====\n";

    echo "Luas layang-layang : $luas\n";
    echo "Keliling layang-layang : $keliling\n";
} else if ($bangun == 2) {
    echo "== Belah Kelapa ==\n";
    echo "Masukkan D1 : ";
    $a = trim (fgets(STDIN));
    echo "Masukkan D2 : ";
    $b = trim(fgets(STDIN));
    echo "Masukkan sisi : ";
    $s = trim(fgets(STDIN));

    Echo "==== Hasil ====\n";

    $luas = ($a*$b)/2;
    echo "Luas Belah Kelapa : $keliling\n";
    $keliling = 4*$s;
    echo "Keliling Belah Kelapa : $keliling\n" ;
} else if ($bangun == 3) {
    echo "== Trapesium ==\n";
    echo "Masukkan sisi sejajar(+) : ";
    $a = trim (fgets(STDIN));
    echo "Masukkan sisi sejajar(-) : ";
    $b = trim(fgets(STDIN));
    echo "Masukkan tinggi : ";;
    $t = trim (fgets(STDIN));
    echo "Masukkan Panjang sisi miring : ";
    $c1 = trim (fgets(STDIN));
    echo "Masukkan Panjang sisi miring(1) : ";
    $c2 =trim (fgets(STDIN));

    Echo "==== Hasil ====\n";

    $luas = ($a+$b)*$t/2;
    echo "Luas Trapesium : $luas\n";
    $keliling = $a+$b+$c1+$c2;
    echo "Keliling Trapesium : $keliling\n";
} else if ($bangun == 4) {
    echo "== Jajar Genjreng ==\n";
    echo "Masukkan Panjang sisi sejajar : ";
    $p = trim(fgets(STDIN));
    echo "Masukkan Panjang sisi sejajar (1) : ";
    $p1 = trim (fgets(STDIN));
    echo "Masukkan Panjang sisi alas : ";
    $a = trim (fgets(STDIN));
    echo "Masukkan Tinggi : ";
    $t = trim (fgets(STDIN));

    echo "== Hasil ==\n";

    $luas = $a*$t;
    echo "luas Jajar Genjreng : $luas\n";
    $keliling = 2*($p+$p1);
    echo "Keliling Jajar Genjreng : $keliling\n";
} else {
    echo "Bangun dlu baru milih\n";
}


