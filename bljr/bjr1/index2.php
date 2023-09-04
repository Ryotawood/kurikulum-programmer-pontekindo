<?php
//konek ke database
$conn = mysqli_connect("localhost","ryota","asem1234","Datasantri");

//ambil data dari database
$result = mysqli_query($conn,"SELECT * FROM santri");
if ( !$result ){
    echo mysqli_error($conn);
}
// ambil data (fetch) dari object result, ada 4 cara
// mysqli_fecth_row() // fungsi mengembalikan array numerik
// mysqli_fetch_assoc() // fungsi mengembalikan array associative
// mysqli_fetch_array() // kalo ini lebih fleksible bisa numerik bisa associative, kekurangan dia akan menampilkan datanya double
// mysqli_fetch_object()　// cara pakai nya simbol ->, $stri->nama

// while ($stri = mysqli_fetch_assoc($result)){;
// var_dump($stri ["nama"]);

// }


// var_dump ($result);
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
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>

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
    <?php endwhile; ?>

    </table>
</body>
</html>