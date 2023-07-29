<?php
// soal 5,6,7
// $data = [
//     "id" => 582,
//     "username" => "Fulan",
//     "email" => "fulan@gmail.com",
//     "password" => "123fulan321",
//     "password_confirmation" => "123fulan321",
//  ];
// $data["nomor_telepon"] = "08573465325";
// unset($data["password_confirmation"]);
// $data["username"] = "Faqih";

// foreach ($data as $a =>$b){
//     echo "$a : $b \n";
// }

// soal 3
// $string = 'Aqidah & Fiqih & Hadits & Tafsir & Tajwid & Adab';
// print_r(explode('&',$string,6));

// soal 4
// $array= [-2,4,-18,9,0,21,-5];
// echo "Urutan besar ke kecil : ";
// rsort($array);
// foreach ($array as $key => $value){
//     echo "$value,";
// }
// echo "\n";
// echo "Negatif : ";
// sort($array);
// foreach ($array as $key1 => $value1){
//     if($value1 < 0){
//         echo "$value1,";
//     }
// }
// echo "\n";
// echo "Positif : ";
// sort($array);
// foreach ($array as $key1 => $value1){
//     if($value1 > 0){
//         echo "$value1,";
//     }
// }
// echo "\n";

// soal 1
// echo "Masukkan Nama Produk : ";
// $nama_produk = strtoupper(trim(fgets(STDIN)));
// // echo " strtoupper($nama_produk);
// echo "Masukkan Deskripsi Produk : ";
// $desc = trim(fgets(STDIN));
// if(str_word_count($desc) > 4){
//     echo "Deskripsi terlalu panjang";
// }else{
//     echo "Deskripsi : $desc\n";
// }
// echo "Masukkan Kode Produksi : ";
// $kode = trim(fgets(STDIN));
// // true                     false
// if(strlen($kode) > 8 || !is_numeric($kode)){
//     echo "Input Invalid";
// }else{
//     echo "Kode produksi : $kode\n";
// }

// 2
echo "Masukkan Kode Item: ";
$item = strtoupper(trim(fgets(STDIN)));
$kode2 = substr($item,0,2); //index 0 ambil 2 karakter // karakter no 1-2
$kode1 = substr($item,0,1); // index 0 ambil 1 karakter // karakter no 1
$kode12 = substr($item,1,1); // index 1 ambil 1 karakter // karakter no 2
if(is_numeric($kode2) && $kode2 < 50){
    echo "Item Rare\n";
}elseif(is_numeric($kode2) && $kode2 >= 50){
    echo "Item Super Rare\n";
}elseif($kode1 == 'A' || $kode1 == 'B' || $kode1 == 'C'){
    echo "Item Unique\n";
}elseif($kode1 == 'D' || $kode1 == 'E' || $kode1 == 'F'){
    echo "Item Legendary\n";
}elseif(is_numeric($kode1) && is_string($kode12) || is_string($kode1) && is_numeric($kode12)){
    echo "Item Ultra Rare\n";
}else{
    echo "Item Common\n";
}



// buat function dengan parameterny variable-length-argument yang mana function akan mengembalikan nilai array
// dengan nama variableny 'siswa'
// lalu ubah variable siswa menjadi string
// tampilkan menggunakan echo

// function namasiswa(...$siswa){
//     $t = $siswa;
//     return $t;
//         echo "$siswa". PHP_EOL;
// }
// namasiswa ("faqih","ahmad");
// function nama(...$daftar){
//     return $siswa = $daftar;
// }
// $siswa = nama ("Faqih","Ahmad");
// echo implode ("\n",$siswa);


