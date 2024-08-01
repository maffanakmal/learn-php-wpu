<?php
    require 'functions.php';
    $singer = query("SELECT * FROM singer");

    // tombol cari ditekan
    if (isset($_POST["cari"])){
        $singer = cari($_POST["keyword"]);
    }
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
    <h1>Daftar Penyanyi</h1> 
    
    <a href="tambah.php">Tambah Data Penyanyi</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="50" autofocus placeholder="Masukkan keyword pencarian!" autocomplete="off">
        <button type="submit" name="cari">Cari!</button>

    </form>
    <br>


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
                    <a href="ubah.php?id=<?= $row["id"] ?>">Ubah</a> | 
                    <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('yakin?');">Hapus</a>
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