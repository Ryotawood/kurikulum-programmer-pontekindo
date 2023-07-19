<?php
do {
echo "()()()()()()()()(\n";
echo "()( Sewa Buku )()\n";
echo "()()()()()()()()(\n";
echo "<><> MENU <><>\n";
echo "1. Sewa \n";
echo "2. Keluar\n\n";
echo "Pilih Menu : ";
$menu =trim(fgets(STDIN));

if ($menu == 1){
    echo "<>< Mau Buku apa ><>\n";
    echo "Nama Peminjam : ";
    $nama = trim(fgets(STDIN));
    echo "Judul Buku Yang Mau Disewa : ";
    $buku = trim(fgets(STDIN));
    echo "Sewa Buku Berapa Hari : ";
    $sewa =trim(fgets(STDIN));
    echo "Hari Ke Berapa Dikembalikan : ";
    $hari = trim(fgets(STDIN));
    $harga = 10000 * $sewa;
    $denda = $hari - $sewa;
    echo "<^>< Pembayaran ><^>\n";
    echo "<^><^><^><^><^><^><^>\n";
    echo "Nama Penyewa : $nama-さん\n";
    echo "Judul Buku : $buku\n";
    echo "Disewa Berapa Hari : $sewa 日\n";
    echo "Hari Ke Berapa Dibalikkin : $hari 日\n";
    echo "Harga Sewa Buku : $harga ¥\n";
    switch ($denda) {
        case $denda < 0:
            $biaya_denda = 0;
            $total = $harga + $biaya_denda;
            echo "Biaya Denda : $biaya_denda ¥\n";
            echo "Total Pembayaran : $harga + $biaya_denda = $total ¥\n";
            echo "Hon の go henkyaku arigathanks gozaimuch\n";
            break;
        case $denda <= 3 :
            $biaya_denda = 250000;
            $total = $harga + $biaya_denda;
            echo "Biaya Denda : $biaya_denda ¥\n";
            echo "Total Pembayaran : $harga ¥ + $biaya_denda ¥ = $total ¥\n";
            echo "Kena Dendakan, Bayar Oii\n";
            break;
        case $denda <= 6:
            $biaya_denda = 500000;
            $total = $harga + $biaya_denda;
            echo "Biaya Denda : $biaya_denda ¥\n";
            echo "Total Pembayaran : $harga ¥ + $biaya_denda ¥ = $total ¥\n";
            echo "Sebenerny aku tu baek, tapi kaunya, yaudahlah\n";
            break;
        case $denda <=7:
            $biaya_denda = 1000000;
            $total = $harga + $biaya_denda;
            echo "Biaya Denda : $biaya_denda ¥\n";
            echo "Total Pembayaran : $harga ¥ + $biaya_denda ¥ = $total ¥\n";
            echo "Bersyukur ya\n";
            break;
        default:
            $biaya_denda = 10000000;
            $total = $harga +   $biaya_denda;
            echo "Biaya Denda : $biaya_denda ¥\n";
            echo "Total Pembayaran : $harga ¥ + $biaya_denda ¥ = $total ¥\n";
            echo "Ini denda udah yang paling murah ya tong bersyukur\n";
            break;
        }
    }else if ($menu == 2){
        echo "Terima Kasih Atas Kunjungan Anda\n";
        exit;
    } else {
        echo "Pilihan tidak tersedia\n";
    }
     echo "Balik Ke Menu (Y/N) : ";
     $balik = trim (fgets(STDIN));
}while($balik == "Y");

echo "Terima Kasih Sudah Berkunjung\n";