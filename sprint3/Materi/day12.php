<?php

//Buat program yang menghitung karakter dalam suatu string menggunakan 
//function anonymous dengan input dinamis

// LAH PUNYA GUA
// echo "Masukkan kata : ";
// $kata =trim(fgets(STDIN));
// $kita = function ($kata, $closure){
//     echo "Kata : ". $closure($kata);
// };
// $kata(function($kita){
//     return strlen($kita);
// });
// $kata($kita);

//CARA 1
// echo "Masukkan kata : ";
// $kata =trim(fgets(STDIN));

// $kita = function () use ($kata){
//     echo "Kata : ". strlen($kata).PHP_EOL;
// };
// $kita();

// CARA 2
// $count = function(){
//     echo "Masukkan Data : ";
//     $input =trim(fgets(STDIN));
//     echo "Jumlah Data : ".strlen($input).PHP_EOL;  
// };
// $count();





//Buat program pemisah antara nilai ganjil dengan nilai genap (yang positifnya saja)
// menggunakan variable function dengan input statis saja

// function jilnap(...$angka){
//     echo "Angka Genap : ";
//     foreach ($angka as $genap){
//         if($genap % 2 == 1 && $genap > 0){
//             echo "$genap,";
//         }
//     }
//     echo "\n";
//     echo "Angka Ganjil : ";
//     foreach($angka as $ganjil){
//         if ($ganjil % 2 == 1 && $ganjil <0 ){
//             echo "$ganjil,";
//         }
//     }
//     echo "\n";
// }

// jilnap(-2,-5,-8,-10,5,7,12,7,6);
// $a="jilnap";
// $a();



// $langsungmake = "ninja";
// // Arrow Function : pokoknya yang kata kuncinya fn dan pake panah

// $arrow = fn($coba)=> "aku seorang $langsungmake $coba\n";
// echo $arrow("akan menjadi hokage");


// buat program menghitung luas persegi pakai arrow function
// $sisi=5;
// $sisii=5;
// $hasil = 5*5;
// $luas = fn($itung)=> "hasilnya $itung\n";
// echo $luas("$sisi * $sisii = $hasil ");

// echo "hasilnya 5 * 5 = 25\n";

$keterangan = "Luas : ";
$luas = fn($sisi) => $keterangan . $sisi * $sisi;
echo $luas(10);
echo "\n";







