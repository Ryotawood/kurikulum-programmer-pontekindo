<?php

// BISMILLAH
// EVALUASI

// 1
// function tipeTertinggi (){

// }
// tipeTertinggi[216, 769, 255, 512, 363, 121];


// 2
// $tinggi = 20;
// $alas = 12;
// function menghitungLuasSegitiga($hasil){
//     echo "Luas : ".PHP_EOL;
// }
// menghitungLuasSegitiga(fn($cek) => $tinggi * $alas);

// 3
// function ubahData(...$data){    
//     echo "$data  ku".PHP_EOL;
// }
// implode(ubahData);
// ubahData("Vario","Supra","Revo","Vixion","Mio","Beat");

// 4

// echo "Jumlah Penduduk : ";
// $ami=trim(fgets(STDIN));
// $desa = function($name){

// };
// $ami();

// 5
/* ada 3 variable scope
- LOCAL
adalah suatu variable yang berada dalam suatu function, yang mana variable loval ini tidak bisa di panggil dari luar functionnya
contoh 
function tesae(){
    $a =1; // nah ini dia variable local
    echo "$a Cuma bisa dipanggil di dalam function";
}
tesae();

echo "$a dia gak bisa di panggil dari luar karna dia pemalu" ;

- GLOBAL
adalah suatu variable yang berada di luar suatu function, yang mana variable gloval ini tidak bisa dipanggil dari dalam functionnya
contoh
$a =1; // nah ini dia variable global
function tesae(){
    echo "$a dia gak bisa dipanggil dari dalam karna dia durhaka rumah";
}
tesae();
echo "$a Cumba bisa dipanggil di dalam function";
- static
adalh sesuatu yang dipake agar suatu fungsi itu bisa berjalan lagi, dri pada bingung nih ku kasih 2 contoh yang bisa abang pahami

tanpa static
function tesae(){
    $a = 1;
    echo $a;
    $a++;
}
tesae();
tesae();
tesae();
nanti dia akan keluar 111

menggunakan static
function tesae(){
    static $a = 1;
    echo $a;
    $a++;
}
tesae();
tesae();
tesae();
nanti dia keluar 123
KENAPA ??, Pake nanya karna pake static dong hahahahahah
*Canda Bang
*/



// 6 

require_once "../Evaluasi/baru.php";

$nilaiSantri = [90, 85, 94, 77, 62, 88];