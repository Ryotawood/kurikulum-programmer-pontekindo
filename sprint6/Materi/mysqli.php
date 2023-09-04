<?php
$conn = mysqli_connect("server","username","password","db_name");

if(mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

echo "koneksi database berhasil";

// object orirented
$mysqli = new mysqli("server", "username","password","db_name");
if ($mysqli->connect_errno) {
    echo"Connect failed : ". $mysqli->connect_error;
}
echo "connect succesfully. HOST INFO : " . mysqli_get_host_info($mysqli);
    

// OOP - PDO
try{
    $pdo = new PDO("mysql:host=server;dbname=db_name", "username", "password"); // hanya di baris ini sudah bisa menggabungkan ke database

    if($pdo){
        echo "Koneksi Database Berhasil";
    }

}catch (PDOException $e){
    echo $e ->getmessage();
}


phpinfo();
