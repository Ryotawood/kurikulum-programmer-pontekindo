<?php
$angka = mt_rand(1,50);
$nyawa = 3;


echo "<><><><><><><><><><><><><>\n";
echo "Yokoso Watashi の MiniGame\n";
echo "<><><><><><><><><><><><><>\n";
echo "{}{}{}{Tebak Angka}{}{}{}{}\n";
echo "Disini akan ada angka 1-9\n";
echo "Kalian Memiliki 3 Lives\n";
echo "<^><^><^><GOOD LUCK><^><^><^>\n";


do {
    echo "Tebak Angka : ";
    $tebak = (int)(trim(fgets(STDIN)));
    if ($nyawa == 1) {
        echo "Kamu mati\n";
        echo "Balik Ke Menu (Y/N) : \n";
        $balik =strtoupper (trim (fgets(STDIN)));
        if ($balik == "N") {
            exit;
        }
        $nyawa = 3;
    }else if ($tebak < $angka){
        echo "Terlalu Kecil\n";
        $nyawa -= 1;
        echo "Sisa Nyawa : $nyawa\n";
    }else if ($tebak > $angka) {
        echo "Terlalu Besar\n";
        $nyawa -= 1;
        echo "Sisa Nyawa : $nyawa\n";
    }else if ($tebak == $angka){
        echo "Selamat Benar\n";
        echo "Balik Ke Menu (Y/N) : \n";
        $balik =strtoupper (trim(fgets(STDIN)));
        if ($balik == "N"){
            exit;
        }
    
    }else {
        echo "invalid";
    }
    
    
}while(true);