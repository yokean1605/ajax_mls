<?php 
    $server = "localhost";
    $user   = "root";
    $pass   = "123";
    $db     = "ajax_mls";
    // memuat koneksi
    $koneksi = mysqli_connect($server, $user, $pass, $db);
    if (mysqli_connect_errno()) {
        echo "Koneksi gagal : " . mysqli_connect_error();
    }
 ?>