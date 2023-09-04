<?php
require "functions.php";
$santri = query("SELECT * FROM santri");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Daftar Santri</h1>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>TTL</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = 1;?>
    <?php foreach( $santri as $row ) : ?>

    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">Update</a> |
            <a href="">Delete</a>
        </td>
        <td><img src="img/<?= $row["gambar"]?>" width="50"></td>
        <td><?= $row["nis"]?></td>
        <td><?= $row["nama"]?></td>
        <td><?= $row["ttl"]?></td>
        <td><?= $row["email"]?></td>
        <td><?= $row["jurusan"]?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

    </table>
</body>
</html>