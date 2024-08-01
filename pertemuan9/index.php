<?php
    // ambil data (fetch) singer dari object result 
    // mysqli_fetch_row(), Mengembalikan array numerik
    // mysqli_fetch_assoc(), Mengembalikan array asosiatif
    // mysqli_fetch_array(), Mengembalikan keduanya
    // mysqli_fetch_object()

    require 'functions.php';
    $singer = query("SELECT * FROM singer");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Penyenyi</h1>    

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Kelahiran</th>
            <th>Tempat Lahir</th>
            <th>Pekerjaan</th>
            <th>Genre</th>
            <th>Instrumen</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($singer as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a> | 
                    <a href="">Hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"] ?>"></td>
                <td><?= $row["namaLahir"] ?></td>
                <td><?= $row["kelahiran"] ?></td>
                <td><?= $row["tempatLahir"] ?></td>
                <td><?= $row["pekerjaan"] ?></td>
                <td><?= $row["genre"] ?></td>
                <td><?= $row["instrumen"] ?></td>
            </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>

</body>
</html>