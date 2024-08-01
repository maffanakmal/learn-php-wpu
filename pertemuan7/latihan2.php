<?php
    // cek apakah tidak ada data di $_GET
    if (!isset($_GET["namapanggung"]) ||
    !isset($_GET["namalahir"]) || 
    !isset($_GET["kelahiran"]) ||
    !isset($_GET["tempatlahir"]) ||
    !isset($_GET["pekerjaan"]) || 
    !isset($_GET["genre"]) ||
    !isset($_GET["instrumen"]) || 
    !isset($_GET["gambar"])){
        // redirect
        header("Location: latihan1.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penyayi Wanita</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["namalahir"]; ?></li>
        <li><?= $_GET["kelahiran"]; ?></li>
        <li><?= $_GET["tempatlahir"]; ?></li>
        <li><?= $_GET["pekerjaan"]; ?></li>
        <li><?= $_GET["genre"]; ?></li>
        <li><?= $_GET["instrumen"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali Ke Daftar Penyayi</a>
</body>
</html>