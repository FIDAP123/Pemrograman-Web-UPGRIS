<?php
    $nama_server = "localhost";
    $nama_user = "root";
    $password = "";
    $dbname = "informatika";

    $conn = mysqli_connect($nama_server, $nama_user, $password, $dbname);

    if (!$conn) 
    {
        die("koneksi gagal: " .mysqli_connect_error());
    }
?>