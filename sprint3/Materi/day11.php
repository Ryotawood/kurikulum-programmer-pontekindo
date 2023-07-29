<?php

// varibale function

// function sum($a, $b){
//     $t = $a +$b;
//     return $t;
// }
// $penjumlahan = sum(55,45);
// echo $penjumlahan;

// buat variable function dengan tujuan untuk memanggil nama dan divisi dengan parameter default value

// function nama($nama,$divisi="programmer"){
//     $data = $nama.$divisi;
//     return $data;
// }
// nama("faqih","programer");

// function nama($nama = "Faqih",$divisi="Programmer"){
//     return "Nama : $nama\nDivisi : $divisi\n";
// }
// // $tampil = nama("Ahmad", "Youtuber");
// // echo $tampil;
// $tampil = "nama";
// echo $tampil("Ryota", "Programmer");

//buat seperti ini tanpa default value dengan variable-length-argument: Nama-nama Hewan
// Gw
// function hewan(...$binatang){
//     return $binatang;
// }
// $liat = hewan ("Naga","Muichiro"."\n");
// echo implode ($liat);
//Senpai
// function hewan(...$binatang){
//         return implode(",",$binatang);
//     }
//     $liat = "hewan";
//     echo $liat ("Dragon\n"."Rikka"). PHP_EOL;

//anonymous function atau closure yang tidak punya nama
// $buah = function ($fruit){//closure
//     return "Buah :$fruit";
// };

// echo $buah("Apel");

//dan function ini bisa kita jadikan argumen jg

// menghitung jumlah kata dalam sebuah string
function jumlah_kata($string, $closure){
    echo "Jumlah kata : ". $closure($string);
}

jumlah_kata("Saya adalah seorang kapiten", function($kalimat){return str_word_count($kalimat);});

$buah = "Melon";

$tampil = function () use($buah){// use hanya untuk closure
    // global $buah; cara 2 -> diletakkan di dalam blok code function dan bisa dipakai
    // difunction mana saja
    echo "$buah";
};
$tampil();


