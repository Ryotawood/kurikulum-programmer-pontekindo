<?php
//konek ke database
$conn = mysqli_connect("localhost","ryota","asem1234","Datasantri");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    } 
    return $rows;
}

?>