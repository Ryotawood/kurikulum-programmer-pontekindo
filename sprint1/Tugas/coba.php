<?php
$total = 0;
$fruit = 15000;
$marimas = 25000;
$mixue = 10000;


echo "==== Cashier ====\n";
echo "1. Scan\n";
echo "2. Gak jadi bayar\n";
$opti = trim(fgets(STDIN));

if ($opti = 1) {
    echo "=== Beli apa aja ===\n";
    echo "=== Kami Hanya Menjual ===\n";
    echo "1.Fruit\n";
    echo "2.Marimas\n";
    echo "3.Mixue\n";
    $barang1 = trim(fgets(STDIN));
}   if ($barang1 = 2) {
    echo "=== Beli apa lagi===\n";
    echo "=== Kami Hanya Menjual ===\n";
    echo " Total : $total+=$fruit\n";
    echo "1.Marimas\n";
    echo "2.Mixue\n";
    echo "3.Udah\n";
    $barang2 = trim(fgets(STDIN));
} if ($barang2 = 2){
    echo "=== Beli apa lagi===\n";
    echo "=== Kami Hanya Menjual ===\n";
    echo "Total : $total+$marimas\n";
    echo "1.Fruit\n";
    echo "2.Mixue\n";
    echo "3.Udah\n";
    $barang2 = trim(fgets(STDIN));
} if ($barang1 = 3){
    echo "=== Beli apa lagi===\n";
    echo "=== Kami Hanya Menjual ===\n";
    echo "Total : $total += $mixue\n";
    echo "1.Marimas\n";
    echo "2.Fruit\n";
    echo "3.Udah\n";
    $barang2 = trim(fgets(STDIN));
} else if ($opti = 2) {
    echo "noob\n";
    exti;
}
