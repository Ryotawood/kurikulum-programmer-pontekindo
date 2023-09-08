<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=Todo","ryota","asem1234");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e->getMessage();
}

