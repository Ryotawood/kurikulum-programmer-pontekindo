<?php

// Expression : Nilai/Value, biasany sebelah kanan
// Statement, kalo di html Element/Attribut : kalimat code hingga akhir / titik koma
// block adalah kumpulan statement yang terdiri dari nol atau lebih statement
// block : code yang berada di dalam {}

//percabangan -> if else

// echo "---------------------------------";
// echo "===== Mendata Nilai Santri ======";
// echo "_________________________________";

// echo "Masukkan Nama Santri :";
// $nama = trim(fgets(STDIN));
// echo "Masukkan Nilai Santri :";
// $nilai = trim(fgets(STDIN));
// echo "Nama Santri : $nama\n";
// echo "Nilai Santri : $nilai dengan predikat ";
// if ($nilai == 100){
//     echo "Perfect";
// } else if($nilai >=80){
//     echo "Excellent";
// }else if ($nilai >=60){
//     echo "Good";
// }else{
//     echo "Not Passed";
// };

// echo PHP_EOL;

// Nested if -> if di dalam if
// echo "++++++++++++++++++++++++++++++++++\n";
// echo "++++++ Mendata Nilai Santri ++++++\n";
// echo "++++++++++++++++++++++++++++++++++\n";
// echo "<><><><<><><><><MENU><><><><><><><\n";
// echo "1. Input Pembeli \n";
// echo "2. Keluar\n\n";
// echo "Pilih Menu : ";
// $menu =trim(fgets(STDIN));

// if ($menu == 1){echo "Nama Pembeli :";
// $nama = trim(fgets(STDIN));
// echo "Masukkan Total Belanja :";
// $nilai = trim(fgets(STDIN));
// echo "Nama Pembeli : $nama\n";
// echo "Total Belanja : $nilai Selamat Kamu Dapat Hadiah ";
//  if ($nilai <= 100000){
//     echo "Sentuh Barang selama 1 detik";
// } else if($nilai <=1000000){
//     echo "Seperti pelanggan pertama";
// }else if ($nilai >=10000000){
//     echo "Bisa Ketemu MrBeast";
// }
// }else if($menu == 2){
//     echo "Gak Ada Duit lu\n";
//     exit;
//     // die;
// } else {
//     echo "Invalid broo";
// }

// echo PHP_EOL;


// switch statement
// Switc -> mirip seperti if else namun syntax lebih simple
// $nilai = 90 ; 
// switch ($nilai) {
//     case $nilai >=100:
//         echo "perfect";
//         break;
//     case $nilai >=80 :
//         echo "Excellent\n";
//         break;
//     default:
//         echo "not passed\n";
//         break;
// }

//Sewa buku di perpus bila lewat berapa hari akan diberi denda

echo "++++++++++++++++++++++++++++++++++\n";
echo "++++++ Sewa Buku ++++++\n";
echo "++++++++++++++++++++++++++++++++++\n";
echo "<><><><<><><><><MENU><><><><><><><\n";
echo "1. Melihat \n";
echo "2. Keluar\n\n";
echo "Pilih Menu : ";
$menu =trim(fgets(STDIN));
if ($menu == 1) {echo "Nama Penyewa : ";
    $nama = trim(fgets(STDIN));
    echo "Nama Buku : ";
    $buku = trim(fgets(STDIN));
    echo "Batas Hari Sewa Buku : ";
    $batas = trim(fgets(STDIN));
    echo "Jumlah Hari Sewa : ";
    $hari = trim(fgets(STDIN));
    $harga = 5000 * $hari;
    $denda = $hari - $batas;
    echo "========= Total Pembayaran =========\n";
echo "Nama Penyewa : $nama\n";
echo "Judul Buku : $buku\n";
echo "Batas Hari Sewa Buku : $batas Hari\n";
echo "Jumlah Hari Sewa : $hari Hari\n";
echo "Harga Sewa Buku : Rp. $harga\n";
switch ($denda) {
    case $denda <= 0:
        $biaya_denda = 0;
        $total = $harga + $biaya_denda;
        echo "Biaya Denda : Rp.$biaya_denda\n";
        echo "Total Pembayaran : Rp.$harga + Rp.$biaya_denda = Rp.$total\n";
        echo "Hon no go henkyaku arigatougozaimashita\n";
        break;
    case 1 :
        $biaya_denda = 100000;
        $total = $harga + $biaya_denda;
        echo "Biaya Denda : Rp.$biaya_denda\n";
        echo "Total Pembayaran : Rp.$harga + Rp.$biaya_denda = Rp.$total\n";
        echo "Lagian Minjem Telat Balikin\n";
        break;
    case 2 :
        $biaya_denda = 150000;
        $total = $harga + $biaya_denda;
        echo "Biaya Denda : Rp.$biaya_denda\n";
        echo "Total Pembayaran : Rp.$harga + Rp.$biaya_denda = Rp.$total\n";
        echo "Lama Kali Balikin aja\n";
        break;
    case 3 :
        $biaya_denda = 250000;
        $total = $harga + $biaya_denda;
        echo "Biaya Denda : Rp.$biaya_denda\n";
        echo "Total Pembayaran : Rp.$harga + Rp.$biaya_denda = Rp.$total\n";
        echo "Kalo Emang Mau Lama Bilang Aja\n";
        break;
    case 4 :
        $biaya_denda = 300000;
        $total = $harga + $biaya_denda;
        echo "Biaya Denda : Rp.$biaya_denda\n";
        echo "Total Pembayaran : Rp.$harga + Rp.$biaya_denda = Rp.$total\n";
        echo "Eh Alah Lu Mau Minjem Atau Mau Hak Milik\n";
        break;
    case 5 :
        $biaya_denda = 400000;
        $total = $harga + $biaya_denda;
        echo "Biaya Denda : Rp.$biaya_denda\n";
        echo "Total Pembayaran : Rp.$harga + Rp.$biaya_denda = Rp.$total\n";
        echo "Balikin buku aja kagak bisa, gimana mau balikin harapan dia\n";
        break;
    case 6 :
        $biaya_denda = 600000;
        $total = $harga + $biaya_denda;
        echo "Biaya Denda : Rp.$biaya_denda\n";
        echo "Total Pembayaran : Rp.$harga + Rp.$biaya_denda = Rp.$total\n";
        echo "Selamat Anda mendapatkan title seorang munafik\n";
        break;
    case 7 :
        $biaya_denda = 800000;
        $total = $harga + $biaya_denda;
        echo "Biaya Denda : Rp.$biaya_denda\n";
        echo "Total Pembayaran : Rp.$harga + Rp.$biaya_denda = Rp.$total\n";
        echo "Elu ngapain aja sih balikin buku aja kgk bisa\n";
        break;
    default: 
        $biaya_denda = 1000000;
        $total = $harga +   $biaya_denda;
        echo "Biaya Denda : Rp. $biaya_denda\n";
        echo "Total Pembayaran : Rp. $harga + Rp. $biaya_denda = Rp. $total\n";
        echo "Ini denda udah yang paling murah ya tong bersyukur\n";
        break;

    }

} else if ($menu == 2) {
       echo "Jiakh\n";
       exit;
} else {
    echo "Salah woy\n";
}






















































































