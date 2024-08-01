<?php
    session_start();

    if (!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }

    require 'functions.php';

    // pagination
    // konfigurasi
    $jumlahDataPerHalaman = 5;
    $jumlahData = count(query("SELECT * FROM singer"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

    $singer = query("SELECT * FROM singer LIMIT $awalData, $jumlahDataPerHalaman");

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
    <a href="logout.php">Logout</a>
    <br><br>

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
                <td><?= $i + $awalData; ?></td>
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

    <!-- navigasi -->
    <?php if ($halamanAktif > 1) : ?>
        <a href="?page=<?= $halamanAktif - 1?>">&laquo;</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
            <a href="?page=<?= $i; ?>" style="font-weight: bold; color:red"><?= $i; ?></a>
        <?php else : ?>
            <a href="?page=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?page=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>

</body>
</html>