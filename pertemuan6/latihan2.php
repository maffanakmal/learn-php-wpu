<?php 
// Array Associative
// definisinya sama seperti array numerik kecuali
// key-nya adalah string yang kita buat sendiri

    $mahasiswa = [
        [
            "nama" => "Hayley Williams", 
            "nim" => "211000001", 
            "jurusan" => "Sistem Informasi", 
            "email" => "hayleywills@gmail.com",
            "gambar" => "hayleywilliams.png"
        ],
        [
            "nama" => "Anne Marie", 
            "nim" => "211000002", 
            "jurusan" => "Sistem Informasi", 
            "email" => "annemarie@gmail.com",
            "gambar" => "annemarie.png"
        ],
        [
            "nama" => "Jess Glynne", 
            "nim" => "211000003", 
            "jurusan" => "Sistem Informasi", 
            "email" => "jessgly@gmail.com",
            "gambar" => "jessglynne.png"
        ], 
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>