<?php

interface Kendaraan{// otomatis abstract
    public function berjalan();
    public function gas();

}

class Mobil implements Kendaraan{
    public function berjalan(){
        echo "Mobil Berjalan";
    }
    public function gas(){
        echo "Mobil ngeGAS";
    }
    public function apa(){
        echo "Mobil apa";
    }
}

$mobil = new Mobil();
$mobil->apa();