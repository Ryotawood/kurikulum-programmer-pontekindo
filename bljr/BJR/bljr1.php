<!-- request method
GET & POST

superglobals
adalah variable yang dimilik php, variableny special
sebelum belajar superglobals kalian harus mengetahui tentang variable scope dlu nii -->

<?php
// variable scope / lingkup variable
// $x =10;

// function tampilX() {
// global $x; // kalo pakai global gini barulah dia akan mengambil yang di luar function
// $x = 20;
// echo $x; // dia akan menampilkan 20, dia gk bisa ngambil variable dari luar function dia, lingkup variable, yang bisa di ambil hanya dari lingkupnya dia saja
// }

// tampilX();
// echo "<br>";
// echo $x; // dia akan menampilkan 10 karna di echo

// superglobals,variable global milik php, semua variable superglobals adalah array associative
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER 
// $_ENV

// $_GET
// metode request get adalah metode pengiriman data melalui url yang bisa di tangkap oleh $_GET
// var_dump($_GET);
// cara nambah data
// $_GET['nama']="Rizky";
// ada cara lain untuk nambah data gini caranya, yang diubah dari link atas tu 


$genin = [
    [
    "nama" => "Naruto Uzumaki", 
    "nrp" => "082373242435",
    "email"=>"Narto@gmail.com",
    "skill"=>"Rikudo Choodama Rasenshuriken",
    "gambar"=>"naruto.jpeg"
    ],
    [
        "nama" => "Monkey D Luffy",
        "nrp" => "082373347346",
        "email"=>"Mnkey@gmail.com",
        "skill"=>"Gomu Gomu No",
        "gambar"=>"luffy.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Genin</h1>
<ul>
<?php foreach ( $genin as $gnin) : ?>
    <li> 
        <a href="bljr1(1).php?nama=<?= $gnin["nama"]; ?>&nrp=<?= $gnin["nrp"]; ?>&email=<?= $gnin["email"]; ?>&skill=<?= $gnin["skill"]; ?>&gambar=<?= $gnin["gambar"]; ?>"><?= $gnin["nama"]; ?></a>
    </li>
<?php endforeach;?>
</ul>


</body>
</html>



