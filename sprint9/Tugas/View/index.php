<style>
    * {
        font-family: Impact;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>





<?php
require '../Model/conn.php';
require '../Controller/controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
  </head>
  <body>
    <div class="bg-dark text-white">.bg-dark</div>
    <div class="container">
        <h1>To Do List</h1>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kegiatan</th>
      <th scope="col">Hari</th>
      <th scope="col">Jam</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  </tbody>
</table>

</body>
</html>