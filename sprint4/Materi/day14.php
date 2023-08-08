<?php

// Membahas evaluasi 3

// soal 5
// variable scope
// global scope : adalah variable yang dapat diapnggil dimana saja setelah letak pendeklarasian
// namun tidak bisa langsung digunakan dalam suatu function
// $g = "global";
// function tampil(){
//     global $g;
//     echo $g.PHP_EOL;
// }
// tampil();

// // local scope : variable yang berada didalam suatu function

// $g = "global";
// function taampil(){
//     // global $g;
//     $g = "local";
//     echo $g;
//     echo $g.PHP_EOL;
// }
// taampil();

// static scope : variable yang menggunakan kata kunci static pertamakali saat deklarasi function
// function tampil(){
//     static $g = "local";
//     echo $g . PHP_EOL;
//     $g .= "tampil\n";
// }
// tampil();
// tampil();

// SOAL 2

function menghitungLuasSegitiga($arrowFunc){
    echo "Luas : " . $arrowFunc(12,20) . PHP_EOL;
}
menghitungLuasSegitiga(fn($alas,$tinggi) => 1/2 *$alas *$tinggi);

// SOAL 3

function ubahData($sort,$filter,...$data){
    $sort($data);
    echo $filter (" | ",($data));
}
$imp = "implode";
ubahData("sort",$imp,"Vario","Supre","Revo","Vixion","Mio","Beat") . PHP_EOL;

// SOAL 1

$data = [216,769,255,512,363,121];

function tigaTertinggi(){
    $data = [216,769,255,512,363,121];
    rsort($data);
    $no =1;
    foreach ($data as $key => $value) {
        if($key < 3){
            echo PHP_EOL.$no . " : ". $value .PHP_EOL;
        }
        $no++;
    }
}
tigaTertinggi();

// SOAL 4
echo "Jumlah Penduduk Amegakure : ";
$penduduk = trim(fgets(STDIN));

$amegakure=function() use ($penduduk){
    // global $penduduk;
    if($penduduk >= 200){
        return "Padat Penduduk";
    }else if ($penduduk >=100){
        return "Cukup penduduk";
    }else{
        return "Sedikit penduduk";
    }
};
// echo "Jumlah Pdenduduk Desa Anegakure : $penduduk\n";
echo "Keterangan : ";
echo $amegakure().PHP_EOL;

// SOAL 6

$nilaiSantri = [90,85,94,77,62,88];
require_once "baru.php";
nilaiSanti($nilaiSantri);