<?php
// id, nama barnag, harga, jumlah stock
// buat array berisi produk fashion
// $produk = array (
//     "id" => 10322009803,
//     "nama_barang" => "Baju",
//     "harga" => 250000,
//     "jumlah_stock" => 1,
//     "deskripsi" => "Hanya Berlaku Di Roblox",
//     "tanggal_produksi" => "27-07-1977",
// );
// foreach ($produk as $key => $value){
//     echo "$key : $value".PHP_EOL;
// }



// Manipulasi string : Mengubah/mengedit,menambah,menghapus tipe data string
// strlend() : menghitung panjang string -> menghitung jumlah karakter

//4NUMBER = 1_534_213_49
// var_dump(strlen($string));

// str_word_count() : Menghitung jumlah kata dalam string
// var_dump(str_word_count($string));

// str_replace() : Mengganti string dengan string yang baru

// number_format() : Mengubah angka menjadi string dengan format angka
// var_dump(number_format($number,0,"","."));
// var_dump(number_format($number,2,",","."));

$string = "Hello World Coding";
$var = "heLLO WORLD CODING";

// strtoupper() : Mengubah semua huruf menjadi kapital
// var_dump(strtoupper($string));
// strtolower() : Mengubah semua huruf menjadi huruf kecil
// var_dump(strtolower($var));

//ucwords : Mengubah huruf pertama menjadi huruf kapital
// var_dump(ucwords($var));
// var_dump(ucwords(strtolower($var)))

// str_repeat() : Mengulang string
// var_dump(str_repeat($string,3))

// substr : Mengambil beberapa karakter dari data string
// var_dump(substr($string,3,6));

// $buku ="buku";
// menggunakan kurung kurawal (curly brace) pada variable di dalam string
// echo "Saya sedang melakukan pem{$buku}an" . "\nSaya beli buku baru\n";

// mengubah tipe data menjadi string
$a = (string) 100;
var_dump($a);
// menjadi interger
$b = (int) "220";
var_dump($b);
//menjadi float
$c = (float) trim (fgets(STDIN));
var_dump($c);

$string = "Hello Word Coding\n";
$array = (array) $string;
$r = ["Hello World Coding"];
// explode -> mengubah string menjadi array
$c = ["Hello", "World", "Coding"];
// var_dump($array);
// var_dump(explode(" ", $string));

// implode -> mengubah array menjadi string
var_dump(implode("&",$c));