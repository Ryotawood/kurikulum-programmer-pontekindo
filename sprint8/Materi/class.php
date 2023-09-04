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
    function index() {
        $index = "SELECT * FROM products";
        $statement = $this->$pdo->query($index);
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$laptop = new Laptop();
$asus = new namaProduk();
echo $asus->price;