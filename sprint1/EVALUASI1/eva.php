<?php
// Bismillah

// 1

// $x = "10";  
// $y = "10";

// var_dump($x != $y); // Nilai yang keluar false kalau $x itu sama dengan valueny $y, yang dilihat valueny bukan tanda petikny ada atau tidak

// $x = "100";  
// $y = "100";

// var_dump($x !== $y); // Nilai yang keluar true kalu type mereka tidak sama

// 2.

// define("helo", "This is me\n");
// helo == "This is not me\n";
// echo helo ;
// constant itu value tidak bisa diubah, constanta dimulai dengan hurf atau underscore bukan tanda $, dia berbeda dengan variabale
// $helo = "You're";
// $no = "Not";
// $friend = "Friend";

// echo "$helo $no $friend\n";
// lupa cara praktekny agar si constant jadi undefined :D

// 3.

// $Friend = array( [
//     faqih (17,Yoga,2005)
// ])
// ;
// echo $Friend ;
// lupa :)

// 4.
// $total = 0;
// $uang = 50000;
// $jajan = 20000;
// $ibu = 5000; 
// echo "Budi punya Uang sebesar \n";
// echo $total += $uang ."\n";
// echo "Budi jajan Dengan uang $jajan \n";
// echo "Uang Budi tersisa\n" ;
// echo $total -= $jajan ;
// echo "lalu ibu memberi budi tambahan uang $ibu \n";
// echo "Maka Uang budi tersisa\n";
// echo $total += $ibu ;

//5.
$a = 7;
$b = 3;
echo $a ** $b ;

// 6.
// echo "Syarat Nikah\n";
// echo "1. Baik\n";
// echo "2. GR||GL\n";
//  mengko

// 7.
// echo "Masukkan Beratnya : ";
// $berat=trim(fgets(STDIN));

// switch ($berat) {
//     case <10:
//         echo "ringan\n";
// }

/*Evaluasi
Soal1
!= merupakan simbol untuk operator perbandingan yang digunakan untuk membandingkan dua nilai atau dua variabel 
yang akan menghasilkan nilai tru apabila kedua nilai tidak sama walaupun tipe datanya berbeda
var_dump(1 != 2); true
var_dump(1 != "1"); false
var_dump(1 != 1); false

!== merupakan simbol untuk operator perbandingan "tidak identik" yang digunakan untuk membandingkan dua nilai 
atau dua variabel yang akan menghasilkan nilai true apabila kedua nilai tidak identik (niali dan tipe data tidak
sama)

var_dump(1 !== 2); true
var_dump(1 !== "2"); true
var_dump(1 !== "1"); true
var_dump(1 !== 1); false

Soal2
variable :wadah yang berisi value dengan tipe data tertentu yang dimana value tersebut BISA DIUBAH
$variable = "tipedata string";
$variable = 1;

Constanta : wadah yang berisi value dengan tipe data tertentu dimana value tersebut TIDAK BISA DIUBAH

define ("CONSTANTA", "tipe data string");
const CONSTANTA = 1;
echo CONSTANTA
echo $variable

Soal3
$array = [
    "Danu" => [
        "Nama" => "Danu",
        "Umur" => 17,
        "TTL" => Jambi, 9 Oktober 2005
    ],
    "Dimas" => [
        "Nama" => "Dimas",
        "Umur" => 20,
        "TTL" => [
            "Tempat" => "BatuRaja",
            "Tanggal" => "1 Desember 2002"
        ]
    ],
    "Faqih" => [
        "Nama" => "Faqih",
        "Umur" => 17,
        "TTL" => Yogyakarta, 31 October 2005,
    ],
    "Hafidz" => [
        "Nama" => "Hafidz",
        "Umur" => 17,
        "TTL" => Yogyakarta, 31 October 2005,
    ],
    "Hanif" => [
        "Nama" => "Hanif",
        "Umur" => 17,
        "TTL" => Yogyakarta, 31 October 2005,
    ],
    "Syifa" => [
        "Nama" => "Syifa",
        "Umur" => 17,
        "TTL" => Yogyakarta, 31 October 2005,
    ]
];

$array1 = ["Danu", "Dimas", "Faqih", "Hafidz", "Hanif", "Syifa", "Fandy"];
var_dump(count($array1));
for ($i = 0; $i <count ($array1); $i++) {
    echo "$i. ". $array1[$i].PHP_EOL;
}

Soal4
$budi = 50000;
$jajan = 20000;
$ibu = 5000;
$budi -= $jajan;  penugasan
$budi += $ibu;  penugasan

$budi = $budi - $jajan + $ibu; aritmatika
echo $budi.PHP_EOL;

Soal5
$a = 7;
$b = 3;
$hasil = $a ** $b; aritmatika
$a **= $b; penugasan
echo $a.PHP_EOL;

Soal6
$budi = "Budi";
$akhlakbaik = true;
$goodlooking = false;
$goodrekening = false;


if($akhlakbaik == true && ($goodlooking == true || $goodrekening == true)){
     $ayu = "Ayu : Saya Terima\n";
} else {
    $ayu = "Ayu : Saya Tidak Terima\n";
}
echo " Budi melamar ayu, dia memiliki akhlak yang baik namun tidak goodlooking dan tidak good rekening.\n
Maka Jawaban ayu : $ayu

$budi1 = "akhlak baik";
$budi2 = "tidak good looking";
$budi3 = "tidak good rekening";

if ($budi1 )

Soal7
$berat = null; // $berat =trim(fgets(STDIN))
switch($berat){
    case $berat<10:
        echo "ringan";
        break;
    case $berat<21:
        echo "agak ringan";
        break;
    case $berat<31:
        echo "sedang";
        break;
    case $berat<41:
        echo "berat";
        break;
    default :
        echo "Sangat Berat";
    }



*/















































































































































