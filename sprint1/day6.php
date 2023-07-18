<?php
// foreach -> perulangan 
$array = [
    "Danu" => [
        "Nama" => "Danu",
        "Umur" => 17,
        "TTL" => "Jambi 9 Oktober 2005"
    ],
    "Dimas" => [
        "Nama" => "Dimas",
        "Umur" => 20,
        "TTL" => [
            "Tempat" => "BatuRaja",
            "Tanggal" => "1 Desember 2002",
        ]
    ],
    "Faqih" => [
        "Nama" => "Faqih",
        "Umur" => 17,
        "TTL" => "Yogyakarta, 31 October 2005",
    ],
    "Hafidz" => [
        "Nama" => "Hafidz",
        "Umur" => 17,
        "TTL" => "Yogyakarta, 31 October 2005",
    ],
    "Hanif" => [
        "Nama" => "Hanif",
        "Umur" => 17,
        "TTL" => "Yogyakarta, 31 October 2005",
    ],
    "Syifa" => [
        "Nama" => "Syifa",
        "Umur" => 17,
        "TTL" => "Yogyakarta, 31 October 2005",
    ]
];
// $array1 = ["Danu", "Dimas", "Faqih", "Hafidz", "Hanif", "Syifa", "Fandy"];
// var_dump(count($array1));
// $no = 1;
// for ($i = 0; $i < count ($array1); $i++) {
//     echo "$no. ". $array1[$i].PHP_EOL;
//     $no++;
// }
// $no = 1;
// foreach ($array1 as $value){
//     echo $value.PHP_EOL;
//     // $no++;
// }
// $no = 1;
// foreach ($array1 as $key => $value){
//     echo "$key. ".$value.PHP_EOL;
//     // $no++;
// }
$no = 1;
foreach ($array as $key => $value){
    echo "$key. $value".PHP_EOL;
    foreach ($value as $key1 => $value1){
        echo "$key1 : ".$value1.PHP_EOL;
    }
    $no++;
}




























































































































































































































































































































































































































































































































































