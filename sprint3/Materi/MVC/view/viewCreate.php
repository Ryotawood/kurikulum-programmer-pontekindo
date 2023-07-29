<?php
include_once "../controller/create.php";
include_once "../helper/input.php";

function viewCreate(){
    echo "Masukkan Nama Santri : ";
    $nama = input();
    create($nama);
}