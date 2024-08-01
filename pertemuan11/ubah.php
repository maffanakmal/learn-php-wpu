<?php
    require 'functions.php';

    // ambil data di URL
    $id = $_GET["id"];

    // query data singer berdasarkan id
    $sgr = query("SELECT * FROM singer WHERE id = $id")[0];

    // cek tombol submit sudah ditekan apa belom
    if(isset($_POST["submit"])){
        // cek apakah data berhasil di ubah atau tidak  
        if(ubah($_POST) > 0 ){
            echo "
                <script> 
                    alert('data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>    
            ";
        } else {
            echo "
                <script> 
                    alert('data gagal diubah!');
                    document.location.href = 'index.php';
                </script>    
            ";
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Penyanyi</title>
</head>
<body>
    <h1>Ubah Data Penyanyi</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $sgr["id"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?= $sgr["namaLahir"]; ?>">
            </li>
            <li>
                <label for="namapanggung">Nama Panggung :</label>
                <input type="text" name="namapanggung" id="namapanggung" required value="<?= $sgr["namaPanggung"]; ?>">
            </li>
            <li>
                <label for="kelahiran">Kelahiran :</label>
                <input type="text" name="kelahiran" id="kelahiran" required value="<?= $sgr["kelahiran"]; ?>">
            </li>
            <li>
                <label for="tempatlahir">Tempat Lahir :</label>
                <input type="text" name="tempatlahir" id="tempatlahir" required value="<?= $sgr["tempatLahir"]; ?>">
            </li>
            <li>
                <label for="pekerjaan">Pekerjaan :</label>
                <input type="text" name="pekerjaan" id="pekerjaan" value="<?= $sgr["pekerjaan"]; ?>">
            </li>
            <li>
                <label for="Genre">Genre :</label>
                <input type="text" name="genre" id="genre" value="<?= $sgr["genre"]; ?>"> 
            </li>
            <li>
                <label for="Instrumen">Instrumen :</label>
                <input type="text" name="instrumen" id="instrumen" value="<?= $sgr["instrumen"]; ?>">
            </li>
            <li>
                <label for="Gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required value="<?= $sgr["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>