<?php

// Tipe Data Pada PHP
// Tipe Data Number
// Var_dump biasa dipakai untuk debugging sama halnya dengan print_r
var_dump(1234); //integer
//print_r(1234);
// number menggunakan pemisah berupa underscorea atau garis bawah
var_dump(1_123_234_456);
var_dump(1.436); //float

//ada batasannya
//echo 922337203685477589;
//echo 9223372036854775898;


//tipe data boolean
var_dump(true); //benar
var_dump(false); //salah

var_dump((bool) "a");
var_dump((bool) "0");

//tipe data string -> Character
var_dump ("character");
//var_dump ('character'); single quote
//echo 'Faqih\t Ahmad'; perbedaan single quote dan double quote, single terbatas untuk karakter saja
echo "Faqih\t Ahmad";

//heredoc
echo <<<Faqih

lelah letih lesu lopyu
Bankai, tensa zangetsu
Faqih;
//nowdoc
echo <<<"Faqih"

Saya Koreilo
Lotukeru
Faqih;

//tipe data NULL -> tipe data yang tidak punya value
var_dump(NULL);

//tipe data array -> tipe data yang bisa berisikan beberapa jenis tipe data
var_dump(array (1,true, "false",NULL)); // menggunakan fungsi array
var_dump([2,false,'true',NULL]); // menggunakan kurung siku

// VARIABLE
$nama = "Faqih";
$umur = "14";

echo 'Nama saya adalah $nama, Umur saya $umur';
echo "\n";
echo "Nama saya adalah $nama, Umuru saya $umur";