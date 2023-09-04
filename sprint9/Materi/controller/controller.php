<?php
namespace Data {

    use PDO;
    const AUTHOR = "ryota";

    function sayHi(){
        echo "Hi My name is " . AUTHOR;
    }

    class Laptop {
        const DB_HOST = "localhost";
        const DB_NAME = "indomedia";   
        const DB_USER = "ryota";
        const DB_PASSWORD = "";
    
        function __construct(){
            try{
                $this->pdo = new PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME."",self::DB_USER,self::DB_PASSWORD);        
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }      
    }
    
    class Produk extends Laptop {

    private string $name;

    public function getName():string {
        return $this->$name;
    }
    public function setName(string $name):string {
        return $this->name=$name;
    }
        function index(){
            $index = "SELECT * FROM product_detail";
            $statement = $this->pdo->query($index);
            $products = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}