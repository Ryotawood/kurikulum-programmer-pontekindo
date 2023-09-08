<?php
require "functions.php";
$stri = query("SELECT * FROM santri ORDER BY id DESC");

// tombol di tekan
if (isset($_POST["cari"])) {
    $stri = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Daftar Santri</h1>

    <a href="add.php">Add New SANTRI</a>
    <hr>

    <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari !</button>
    </form>

    <table border="1" cellpadding="10" cellspacing="0">


    <tr class="judul">
        <th>No.</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>TTL</th>
        <th>NIS</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
    <?php $i = 1;?>
    <?php foreach( $stri as $row ) : ?>

    <tr class="isi">
        <td><?= $i; ?></td>
        <td><img src="img/<?= $row["gambar"];?>" width="80"></td>
        <td><?= $row["nama"];?></td>
        <td><?= $row["ttl"];?></td>
        <td><?= $row["nis"];?></td>
        <td><?= $row["email"];?></td>
        <td><?= $row["jurusan"];?></td>
        <td>
            <div class="klik">
            <a href="update.php?nama=<?= $row["nama"];?>">Update</a> |
            <a href="delete.php?nama=<?= $row["nama"];?>" onclick="return confirm('Anda akan menghapus <?= $row['nama'];?>');">Delete</a>
            </div>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

    </table>
</body>
</html>