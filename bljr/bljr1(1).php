<?php
if( !isset($_GET["nama"])){
    header("Location: bljr1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Genin</title>
</head>
<body>

    <ul>
        <li><img src="img/<?= $_GET["gambar"];?>" ></li>
    <li>Nama : <?= $_GET["nama"];?></li>
    <li>NRP : <?= $_GET["nrp"];?></li>
    <li>Email : <?= $_GET["email"];?></li>
    <li>Skill : <?= $_GET["skill"];?></li>
    </ul>

    <a href="bljr1.php">Kembali ke daftar genin</a>
</body>
</html>