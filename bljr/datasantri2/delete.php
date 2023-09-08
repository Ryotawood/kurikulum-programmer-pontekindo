<?php
require 'functions.php';

$nama = $_GET["nama"];

if ( hapus($nama) > 0 ) {
    echo "
        <script>
        alert ('Data Successfully Deleted');
        document.location.href = 'index.php';
        </script>
        ";
} else {
    echo "
    <script>
    alert ('Data Failed To Delete');
    document.location.href = 'index.php';
    </script>
    ";
}

?>