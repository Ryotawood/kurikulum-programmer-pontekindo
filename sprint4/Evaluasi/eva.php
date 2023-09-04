<?php

// SOAL 1

function keyGanjil(){
    $ganjil = [24, 79, 32, 65, 82, 15];
    foreach ($ganjil as $key => $value) {
        if ($key % 2 == 1) {
            echo $key."ganjil".PHP_EOL;
        }
    }
}
sort($keyGanjil);


// SOAL 2
// function ubahData( ...$data){
//     foreach ($data as $key => $value) {
//         echo $key.".".$value. "\n";
//     }

// }
// implode(ubahData("Syifa","Hanif","Danu","Hafidz","Dimas","Faqih"));

// SOAL 3

// $input = trim(fgets(STDIN));

// $dress = function (){
//     if($input > 50){
//         echo "tidak aman";
//     }
// }

// SOAL 4

// $hargaProduk = [12000,31000,25000,40000,17000];
// include_once 'baru.php';