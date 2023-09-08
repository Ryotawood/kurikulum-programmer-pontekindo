<?php 
$conn = mysqli_connect("localhost","ryota","asem1234","penjual");

if(mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
// ini adalah commenting code, jadi tidak akan di eksekusi oleh php, tapi cuma satu baris
/*ini adalah comment 
agar bisa mengcoment
bnyk baris
*/

// standar output
// echo, print
// print_r
// var_dump

//variabel dan tipe data
// variabel
// tidak boleh diawalai dengan angka , tapi boleh mengandung angka
// $1koge
// $koge
// $koge = "Ryota";
//echo "Halo, namaewa $koge;

// Operator 
// arimatika
// + - * / %
// $x = 10
// $y = 5
// echo $x * $y;

// variabel gak boleh ada spasi kalo mau spasi pake underscore
//$ko_re

// penggabung string / concatenation / concat
// . 
// $nama = Ryota;
// $nama1 = Kurt;
// echo $nama . $nama1;

// assignment 
// =, +=, *=, /=, %=, .=
// cuma kayak nambah kurang gitu lah

// perbandingan 
// <, >, <=, >=, ==, !=

// identitas 
// ===, !==

// logika
//&&, ||, !

// function adalah potongan program atau baris' code untuk mempermudah saat memprogram terus code itu bisa di panggil berulang"

// php juga sama ada 2 jenis function
// built-in function atau fungsi yang sudah di sediakan php, php terkenal banyak built-in function
// user-defined function fungsi yang kita bikin sendiri

// built-in function 
// Date/Time
// -time()
// -date()
// -mktime()
// -strtotime()

// echo date("M-d-Y.l"); // menampilkan hari tanggal bulan dan tahun
// m = Bulan, d = Hari, y = Tahun, l = Hari, huruf besar kecilny ngaruh ditampilannya silahkan coba sendiri, dan masih bnyk lagi formatnya bisa di liat di website php officialnya 

// echo time(); // UNIX timestamp / EPOCH time, asal waktu di dunia computer detik itu sudah berlalu sejak 1 januari 1970, gk percaya cek aja sendiri, aku udh ngecheck

// echo date ("d-M-y.l", time()+60*60*24*4); // nah kalo ini dia akan menampilkan tanggal 4 hari kedepan
// echo date ("l", time()-60*60*24*4); // kalo ini dia akan menampilkan tanggal 4 hari kebelakang

// mktime
// membuat detik sendiri
// mktime(0,0,0,0,0,0)
// jam,menit,detik,bulan,tanggal,tahun // ini urutannya gak bisa diubah
// echo date("l", mktime(0,0,0,8,17,1945)); // ini agar kalian bisa ngecheck kalian lahir di hari apa

//strotime
// kita masukin format tanggal keluarny akan detik
// echo strtotime("22 august 2023");

// bnyk lagi function yang lain tapi yang sering dipake

// string
// -strlen() // untuk menghitung panjang dari string
// -strcmp() // menggabungkan string
// -explode() // memecah string jadi array
// -htmlspecialchars() // khusus untuk menjaga kalo ada orang yang mau masuk misal hacker

// utility
// -var_dump() // untuk mencetak isi dari variable,array,object
// -isset() // ngecheck variable sudah tersedia atau blm
// -empty() // ngecheck apakah variable yang ada itu ada isinya atau gk
// -die() // buat memberhentikan program
// -sleep() // memberhentikan sementara

// user defined function
// pertama harus mendefiniskan dulu

// function salam($waktu = Datang, $nama = Ryota){ // ini parameter, yang mana parameter ini akan menerima suatu data dari argument lalu menampilkannya
//     return "Selamat $waktu, $nama!";
// }
// ?>

<!-- // <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=h, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
//     <h1><?php //echo salam("Pagi", "Kurt")?></h1>  ini argument, yang mana argument ini akan terbang ke parameter untuk dijadikan nilai
// </body>
// </html> -->
<?php
// array
// variabel yang dapat memmiliki banyak nilai
// elemnt pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// keynya adalah index yang dimulai dari 0
// index array itu dimulai dari 0

// cara buat array
// cara lama
// $hari = array("Senin","Selasa");
// cara baru
// $bulan = ["June","May"];
//cara nampilkan array
// var_dump
// print_r
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// cara menampilkan 1 elemen pada array
// misal kita mau nampilin hari selasa jadi gini 
// echo "<br>";
// echo $hari[1];

// cara menambahkan elemen baru pada array
//$hari[] = "Rabu";
// array_push ($hari,"Kamis");
// begitu cara menambahkan elemen pada array

// pengulangan dalam array 
// for / foreach
$angka = [3,5,78,4,23,47,9,6];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both;}
    </style>
    <?php for( $i = 0; $i< count($angka); $i++ ) { ?>
    <div class="kotak"><?php echo $angka[$i];?> </div>
    <?php }?>
    
    <div class="clear"></div>
    
    <?php foreach( $angka as $a ) { ?>
        <div class="kotak"><?php echo $a;?></div>
        <?php } ?>

        <div class="clear"></div>
    
    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?php echo $a; ?></div>
        <?php endforeach?>
    
    
    

    </html>
</body>