<?php
// $Genin = [
//     ["Naruto Uzumaki", "082373242435","Narto@gmail.com", "Rikudo Choodama Rasenshuriken"],
//     ["Monkey D Luffy", "082373347346","Mnkey@gmail.com", "Gomu Gomu No"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
// echo $genin[1]["email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Genin</title>
</head>
<body>
    <h1>Daftar Genin</h1>

    <?php foreach( $genin as $gnin) : ?>
    <ul>
        <li>
            <img src="img/<?= $gnin["gambar"]; ?>">
        </li>
        <li>Namae : <?php echo $gnin["nama"] ?></li>
        <li>NRP : <?php echo $gnin["nrp"] ?></li>
        <li>Email : <?php echo $gnin["email"] ?></li>
        <li>Skill : <?php echo $gnin["skill"] ?></li>
    </ul>
        <?php endforeach; ?>
    
</body>
</html>