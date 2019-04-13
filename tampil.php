<?php
    include 'koneksi.php';
    $sql = "SELECT * from user ORDER BY id DESC";
    $data = mysqli_query($koneksi, $sql) or die(mysqli_connect_errno());
?>

<table class="table table-hovered">
    <div class="thead">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
        </tr>
    </div>
    <tbody>
        <?php
            while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?=$d['nama']?></td>
                <td><?=$d['alamat']?></td>
                <td><?=$d['pekerjaan']?></td>
            </tr>
        <?php
            }
        ?>
    </tbody>
</table>