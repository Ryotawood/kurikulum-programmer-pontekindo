<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

    <?php if( isset($_POST["submit"]) ) :?>
        <h1>Hello, <?= $_POST["nama"]; ?></h1>
    <?php endif;?>

    <form action="" method="post">
        Masukkan Nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>

    <form action="bljr2(1).php" method="post">
        Masukkan Username :
        <input type="text1" name="username">
        <br>
        <button type="submit1" name="submit1">Kirim!</button>
    </form>
    
</body>
</html>