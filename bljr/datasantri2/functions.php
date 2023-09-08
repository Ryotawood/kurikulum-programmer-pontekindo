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
    $jurusan = htmlspecialchars($data ["jurusan"]);
    
    //  upload gambar, cek apakah gambar berhasil di upload atau tidak kalo upload gagal maka tidak ada nama yang dikirimkan
    $gambar = upload();
    $g = json_encode($gambar);
    echo "<script>console.log($g)</script>";
    if ( !$gambar) {
        return false;
    }
    
     // query insert data
     $query = "INSERT INTO santri (nama,ttl,nis,email,gambar,jurusan) 
                VALUES
            ('$nama','$ttl','$nis','$email','$gambar','$jurusan')";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}



function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang di upload
    if ($error == 4) {
        echo "<script>
        alert('pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    // cek apakah yang diupload gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('yang anda upload bukan gambar');
        </script>";
        return false;
    }

    // cek jika ukuran terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar');
        </script>";
        return false;   
    }

    // lolos pengecekan, gambar siap di upload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;

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
    $gambarLama = htmlspecialchars($data ["gambarLama"]);
    $jurusan = htmlspecialchars($data ["jurusan"]);

    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


     // query insert data
     $query = "UPDATE santri SET 
                nama = '$nama',
                ttl = '$ttl',
                nis = $nis,
                email='$email',
                gambar='$gambar',
                jurusan='$jurusan'
                WHERE id = $id
                ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}


function cari($keyword){
    $query = "SELECT * FROM santri WHERE nama LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'";
    return query($query);
}
















?>