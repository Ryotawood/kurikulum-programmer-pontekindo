<?php

class Laptop {
    const DB_HOST = "localhost";
    const DB_NAME = "Datasantri";
    const DB_USER = "root"; // Your MySQL username here.
    const DB_PASSWD = '';  // Your MySQL password here.
    const DB = "MARIA DB";
    var ?string $brand;
    var int $price = 1000;

    function __construct(){
        try{
            $pdo = new PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME."", "ryota", "asem1234"); // hanya di baris ini sudah bisa menggabungkan ke database
        
            if($pdo){
                echo "Koneksi Database Berhasil";
            }
        
        }catch (PDOException $e){
            echo $e ->getmessage();
        }
    }
    // function sayThis($milik,$c){
    //     echo "INI LAPTOP ". $c($milik);
    // } 
    function sayThis(string $milik,$c = "strtoupper"):string{
        return "INI LAPTOP ". $c($milik);
    }
    function hargaProduk () {
        $harga = number_format($this->price,0,0,'.');
        echo "Laptop merek {$this->brand} <br> Harganya Rp. {$harga} <br>";
        echo "Database yang digunakan adalah : " . self::DB;
    }

    // function __destruct(){
    //     echo " <br> Hai saya adalah destruct <br>";
    // }


}


$lenovo = new Laptop();
$lenovo->brand = "Lenovo";
$lenovo->price = "150000000";
$lenovo->hargaProduk();
echo "<hr>";
// echo laptop::DB;

// var_dump($lenovo);
// echo "Nama Brand : " . $lenovo->brand;
// echo "<br>";
// echo "Harga : Rp." . number_format($lenovo->price,0,0,".");
// echo "<br>";
// echo $lenovo->sayThis("Ryota","strtoupper");

class namaProduk extends Laptop{
    var $satu;
    public $dua;
    protected $tiga;
    private string $name;

    public function getName():string {
        return $this->$name;
    }
    public function setName(string $name):string {
        return $this->name=$name;
    }
    function index() {
        $index = "SELECT * FROM products";
        $statement = $this->pdo->query($index);
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function tampilTiga(){
        $this->tiga= "tiga";
        echo $this->tiga;
    }
}

class Detail extends Laptop{
    global tampilTiga;
    public funtion tampilTiga(){
        $this->tiga = "tiga";
        echo $this->tiga;
    }
}

// $laptop = new Laptop();
// $asus = new namaProduk();
// echo $asus->price;
$oreo = new namaProduk();
echo "<br>";
$oreo->satu = "satu";
$oreo->dua = "dua";
echo $oreo->satu;
echo "<br>";
echo $oreo->dua;
echo "<br>";
$Detail->tampilTiga();
// echo $oreo->tiga;
