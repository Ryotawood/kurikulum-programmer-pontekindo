<?php
include_once "../model/data.php";
include_once "../helper/input.php";
function delete(){
    global $santri;
    echo "Data Yang Ingin Dihapus : ";
    $delete = input();
    echo "Anda akan mengahapus $santri[$delete]\n";
    for($i = $delete; $i < count($santri); $i++){
        $santri[$i] = $santri[$i+1];
    }
    unset($santri[count($santri)]);
}