<?php

// Jenis jenis array, semua tipe data bisa masuk di array   
//tipe data array
// array numerik -> indexny berupa angka yang dimana dimulai dari angka 0

// $array = ["string", 321, true, null, -12.3];
// //var_dump($array);
// echo $array [0]; // cara menampilkan array, yang muncul cuma 1, kalo mau semuanya nanti pakai for
// echo PHP_EOL;

//array assosiatif -> indexnya / array keyny bisa kita atur sendiri
//array assossiatif -> Man (di bahasa pemrograman lain)
// $arrayAssoc = array (
//     "pertama" => "awaludin",
//     2 => "akhirudin"    
// );

//var_dump($arrayAssoc);
// echo $arrayAssoc["pertama"];

// array dalam array, key ny itu yang kana ya guys
// $fay = array (
//     "id" => "fay",
//     "name" => "Ryota Kurt",
//     "age" => 14,
//     "address" => [
//         "city" => [
//             "Shibuya",
//             "Tokyo"
//         ],
//         "country" => "japan"
//     ]
//     );

// echo $fay["address"]["city"][0];
// echo PHP_EOL;

// macam" operator pada php 
// operator aritmatika -> seperti matematika misal penjumlahan, pengurangan, dsb,
// operand -> yang dioperasikan number karna mtk itu identik dengan number
//maka nanti operand dari aritmatika adalh tipe data number


// penjumlahan -> +
// echo "Penjumlahan :";
// $num1 = 52;
// $num2 = 12;
// echo $num1 + $num2;
// //echo 12 + 12;
// echo "\n";

// // pengurangan -> -
// echo "Pengurangan :";
// echo $num1 - $num2;
// echo "\n";

// // perkalian -> *
// echo "Perkalian :";
// echo $num1 * $num2;
// echo "\n";

// // permbagian -> /
// echo "Pembagian :";
// echo $num1 / $num2;
// echo "\n";

// // pangkat -> **
// echo "Pangkat :";
// echo $num1 ** $num2;
// echo "\n";


// // Modulus (sisa hasil bagi) -> %
// echo "Modulus :";
// echo $num1 % $num2;
// echo "\n";
//echo $num1 = $num2;


//operator penugasan, 
// ditambah -> +=
$angka1 = 2;
$angkas2 = 4;

//$angka1 += $angkas2;
// $angka1 = $angka1 + 17 ;
// echo $angka1;

//dikurang -> -=
$angka1 -= $angkas2;
//dikali -> *=
$angka1 *= $angkas2;
//dibagi -> /=
$angka1 /= $angkas2;
//pangkat -> **=
$angka1 **= $angkas2;
//moudulus -> %=
$angka1 %= $angkas2;
echo $angka1;

// ambil input lewat cli/termial
// trim adalh fungsi bawaan php untuk menghapus spasi pada awal dan akhir data
// $eg = " lue ";
// echo trim ($eg);
//fgets adlah fungsi uuntuk mengambil inputan dari cli/terminal
// STDIN adalh standar input -> tempat untuk menyimpan data sebelum ditampilkan

echo "-----------Menghitung luas persegi ----------- :";
echo "Ketikkan sisi persegi :";
$sisi = trim (fgets(STDIN));
$luas = $sisi * $sisi;
echo "Sisi : $sisi" . PHP_EOL;
echo "Luas : sisi * sisi\nLuas : $sisi * $sisi =$luas" . PHP_EOL;



echo PHP_EOL;

