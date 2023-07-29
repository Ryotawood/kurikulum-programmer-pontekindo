<?php
include_once "../model/data.php";
include_once "../helper/input.php";
function create($nama){
    global $santri;
    $index = count($santri)+1;
    $santri[$index] = $nama;
}



















