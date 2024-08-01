<?php
    require 'functions.php';

    // cek tombol submit sudah ditekan apa belom
    if(isset($_POST["submit"])){
        // cek apakah data berhasil di tambahkan atau tidak  
        if(tambah($_POST) > 0 ){
            echo "
                <script> 
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>    
            ";
        } else {
            echo "
                <script> 
                    alert('data gagal ditambahkan!');
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
    <title>Tambah Data Penyanyi</title>
</head>
<body>
    <h1>Tambah Data Penyanyi</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="namapanggung">Nama Panggung :</label>
                <input type="text" name="namapanggung" id="namapanggung" required>
            </li>
            <li>
                <label for="kelahiran">Kelahiran :</label>
                <input type="text" name="kelahiran" id="kelahiran" required>
            </li>
            <li>
                <label for="tempatlahir">Tempat Lahir :</label>
                <input type="text" name="tempatlahir" id="tempatlahir" required>
            </li>
            <li>
                <label for="pekerjaan">Pekerjaan :</label>
                <input type="text" name="pekerjaan" id="pekerjaan">
            </li>
            <li>
                <label for="Genre">Genre :</label>
                <input type="text" name="genre" id="genre">
            </li>
            <li>
                <label for="Instrumen">Instrumen :</label>
                <input type="text" name="instrumen" id="instrumen">
            </li>
            <li>
                <label for="Gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>