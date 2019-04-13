<?php
    include 'koneksi.php';

    $nama      = $_POST['nama'];
    $alamat    = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];

    $sql = "INSERT INTO user (nama, alamat, pekerjaan) VALUES ('$nama','$alamat','$pekerjaan')";
    $query = mysqli_query($koneksi, $sql) or die(mysqli_connect_errno());
?>
