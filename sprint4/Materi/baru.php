<?php

function nilaiSanti($nilaiSantri){
    echo "Nilai Terbesar : ".max($nilaiSantri).PHP_EOL;
    echo "Nilai Terkecil : ".min($nilaiSantri).PHP_EOL;
    echo "Rata-rata : ".array_sum($nilaiSantri)/count($nilaiSantri).PHP_EOL;
}