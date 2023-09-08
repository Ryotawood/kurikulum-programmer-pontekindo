<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }
    button, a{
        background-color: green;
        color: white;
    }
    </style>
<?php
require 'functions.php';

// ambil data di URL
$nama = $_GET["nama"];

// query data mahasiswa berdasarkan nama 
$stri = query("SELECT * FROM santri  WHERE nama = '$nama' ")[0];

// cek apakah tombol submit sudah di pencet
if (isset($_POST["submit"])) {

    // cek aoakah data diubah atau tidak
    if (update($_POST) > 0){
        echo "
        <script>
        alert ('Successfully Edited Data');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert ('Failed To Edit Data');
        document.location.href = 'index.php';
        </script>
        ";

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Santri</title>
</head>
<body>
    <h1>Edit Santri Data</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $stri["id"];?>">
        <input type="hidden" name="gambarLama" value="<?= $stri["gambar"];?>">
        <ul>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama"
                required value="<?= $stri['nama'];?>">
            </li>
            <li>
                <label for="ttl">TTL : </label>
                <input type="text" name="ttl" id="ttl"
                required value="<?= $stri['ttl'];?>">
            </li>
            <li>
                <label for="nis">NIS : </label>
                <input type="text" name="nis" id="nis"
                required value="<?= $stri['nis'];?>">
            </li>
            <li>
            <label for="email">EMAIL : </label>
                <input type="text" name="email" id="email"
                value="<?= $stri['email'];?>">
            </li>
            <li>
                <label for="jurusan">JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan"  value="<?= $stri['jurusan'];?>">
            </li>
            <li>
            <label for="gambar">GAMBAR : </label> <br>
            <img src="img/<?= $stri["gambar"];?>" width="80"> <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
             <button><a href="index.php">Back</a></button>
                <button type="submit" name="submit">Edit Data</button>
            </li>
        </ul>
    </form>
        



</body>
</html>