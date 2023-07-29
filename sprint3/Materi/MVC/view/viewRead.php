<?php
include_once "../model/data.php";
include_once "../controller/read.php";

function viewRead(){
    global $santri;
    if(empty($santri)){
        echo"Data Kosong\n";
    }else{
        echo "----Data Santri----\n";
        read("strtoupper");
    }
}