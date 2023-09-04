<?php
//konek ke database
$conn = mysqli_connect("localhost","ryota","asem1234","Datasantri");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    } 
    return $rows;
}

function tambah ($data) {
    global $conn;

    $nama = htmlspecialchars($data ["nama"]);
    $ttl = htmlspecialchars($data ["ttl"]);
    $nis = htmlspecialchars($data ["nis"]);
    $email = htmlspecialchars($data ["email"]);
    $gambar = htmlspecialchars($data ["gambar"]);
    $jurusan = htmlspecialchars($data ["jurusan"]);

     // query insert data
     $query = "INSERT INTO santri (nama,ttl,nis,email,gambar,jurusan) 
                VALUES
            ('$nama','$ttl','$nis','$email','$gambar','$jurusan')";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}

function hapus($nama) {
    global $conn;
    $query = "DELETE FROM santri WHERE nama = '$nama'";
    mysqli_query($conn, "$query");

    return mysqli_affected_rows($conn);
}

function update($data){
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data ["nama"]);
    $ttl = htmlspecialchars($data ["ttl"]);
    $nis = htmlspecialchars($data ["nis"]);
    $email = htmlspecialchars($data ["email"]);
    $gambar = htmlspecialchars($data ["gambar"]);
    $jurusan = htmlspecialchars($data ["jurusan"]);

     // query insert data
     $query = "UPDATE santri SET 
                nama = '$nama',
                ttl = '$ttl',
                nis=$nis,
                email='$email',
                gambar='$gambar',
                jurusan='$jurusan'
                WHERE id = $id
                ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);}




















?>