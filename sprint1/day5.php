<?php

// pengkondisian
// ternary
// echo "NILAI : ";
// $nilai = trim(fgets(STDIN));
// $result = $nilai >= 100 ? "Perfect" :( $nilai >= 80 ? "Excellent" : ($nilai >= 60 ? "Noob" :"Not Passed"));
// echo $result.PHP_EOL;

// buat menggunakan ternary yang menghasilkan nama buah apabila kita mengiinput warna buah

// echo "Warna Buah : ";
// $warna = trim(fgets(STDIN));
// $result = $warna == "red" ? "Apple" :($warna == "yellow" ? "orange" : "Gagal" );
// echo $result.PHP_EOL;

// perulangan
// $i = 1;
// for (; $i <10;) {
//     echo "hello\n" ;
//     $i++;
// }

// for ($i=1; $i<=10; $i++) {
//     if ($i==5) {
//         continue;
//     }else if ($i==10){
//         break;
//     } else {
//         echo "$i";
//     }

// echo PHP_EOL;}

// while loop
// jika for seperti ini
// $i = 1;
// for (; $i <10;) {
//     echo "hello\n" ;
//     $i++;
// }
// ini contoh while, didalamnya hanya ada kondisi, harus sesuai kondisi kalo tidak makan tidak akan terecho
// $i = 1;
// while($i <10) {
//     echo "hello\n" ;
//     $i++;
// }

// do while, akan minimal melakukan satu kali perulangan walau nilainya false
// $i = 10;
// do{
//     echo "Hello\n";
//     $i++;

// }while($i<10);

do{
    echo "=== MENU ===\n";
    echo "1. Masuk Apk\n";
    echo "2. Keluar Apk\n";
    echo "Pilih : ";
    $menu = (int) trim(fgets(STDIN));
    if ($menu == 1){
            echo "Masuk Apk\n";
    }else if ($menu == 2) {
        echo "Anda Telah Keluar\n";
        exit;
        //die
    }else {
        echo "Pilihan tidak tersedia\n";
    }
     echo "Balik Ke Menu (Y/N) : ";
     $balik = trim (fgets(STDIN));
}while($balik == "Y");

// while(true) {
//     echo "=== MENU ===\n";
//     echo "1. Masuk Apk\n";
//     echo "2. Keluar Apk\n";
//     echo "Pilih : ";
//     $menu = (int) trim(fgets(STDIN));
//     if ($menu == 1){
//             echo "Masuk Apk\n";
//     }else if ($menu == 2) {
//         echo "Anda Telah Keluar\n";
//         exit;
//         //die
//     }else {
//         echo "Pilihan tidak tersedia\n";
//     }
// }