<?php

abstract class Kendaraan{
    static public $string = "Kendaraan";
    
    abstract function berjalan();

    protected function gas(){
        echo "ini parent class";
    }
}

class Mobil extends Kendaraan{
    static public $string = "Mobil";
        

    public function gas(){
        // echo $this->string;
        echo parent::$string;
        echo self::$string;
        // echo "ini child class";
        // return parent ::gas();
    }


    public function berjalan(){
        echo "Mobil Berjalan";
    }

    static function showMobil(){
        echo "Mobil";
    }

}

    class Motor extends Kendaraan{
       public function berjalan(){
            echo "Motor Berjalan";
        }
    }


// $abstract = new Mobil();
// $abstract->gas();
// $abstract->berjalan();
// echo kendaraan::$string;
// Motor::berjalan();
$mobil = new Mobil();
$mobil->gas();
// Mobil::gas();
Mobil::showMobil();
echo Mobil::$string;
// echo mobil::$string; // bisa juga pake self:: untuk mengakses static class