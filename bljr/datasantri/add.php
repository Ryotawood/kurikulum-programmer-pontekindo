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

if (isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahkan  atau tidak
    // if(mysqli_affected_rows($conn) > 0) {
    //     echo "Successfully Add New Data";
    // } else {
    //     echo "Failed To Add New Data";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }
    if (tambah($_POST) > 0){
        echo "
        <script>
        alert ('Successfully Add New Data');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert ('Failed To Add New Data');
        document.location.href = 'index.php';
        </script>
        ";
        // echo "<br>";
        // echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Santri</title>
</head>
<body>
    <h1>Add New Santri Data</h1>
    <div class="kiri">
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama"
                required strtoupper>
            </li>
            <li>
                <label for="ttl">TTL : </label>
                <input type="text" name="ttl" id="ttl"
                required strtoupper>
            </li>
            <li>
                <label for="nis">NIS : </label>
                <input type="text" name="nis" id="nis"
                required>
            </li>
            <li>
            <label for="email">EMAIL : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
            <label for="gambar">GAMBAR : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
            <label for="jurusan">JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan" strtoupper>
            </li>
            <li>
                <button type="submit" name="submit">Add Data</button>
            </li>
           
        </ul>
    </form>
    <ul>
            <li>
                <button><a href="index.php">Back</a></button>
            </li>
            </ul>
    </div>



</body>
</html>