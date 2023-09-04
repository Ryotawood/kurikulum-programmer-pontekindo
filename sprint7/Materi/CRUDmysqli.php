<?php
$conn = mysqli_connect("localhost","ryota","asem1234","penjual");

if(mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

phpinfo();