<?php
$chance = 3;
$draw = 0;
$lose = 0;
$win = 0;


echo "<><><夜こそ><><>\n";
echo "Watashi の Game\n";
echo "ぉぉJANKENPONぉぉ\n";
echo "<><><><><><><><>\n";


echo "Di Game Ini Kalian Punya $chance Kesempatan\n";
echo "Silahkan Kalian pilih\n";
echo "(1) Guu, (2) Paa, (3) Choki\n";
echo "Pilih : ";
    $janken = ['1' => 'Guu', '2' => 'Paa', '3' => 'Choki'];
    $pilihan = trim(fgets(STDIN));
    $player = $janken[$pilihan] ;
    $comp = shuffle($janken);
    echo "Player = " . $player . "\n";
    echo "Comp = ". $janken[$comp] . "\n";
    
$drew = $player == $comp;
$won = ($player == '1' && $comp == '3') || ($player == '3' && $comp == '2') || ($player   == '2' && $comp == '1');


















