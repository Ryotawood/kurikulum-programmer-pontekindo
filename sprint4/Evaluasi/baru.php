<?php

function hargaProduk(){
    global $hargaProduk;
    echo (max($hargaProduk)).PHP_EOL;
    echo (min($hargaProduk)).PHP_EOL;
    echo (array_sum($hargaProduk)/count($hargaProduk));
}
hargaProduk();
