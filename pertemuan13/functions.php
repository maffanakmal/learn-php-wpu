<?php 
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    
    // ambil data dari table mahasiswa / query data mahasiswa menggunakan fungsi
    function query($query){
        global $conn;
        $result =  mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row; 
        }
        return $rows;
    }
    

    function tambah ($data){
        global $conn;

        // ambil data dari setiap elemen dalam form
        $namapanggung = htmlspecialchars($data["namapanggung"]);
        $nama = htmlspecialchars($data["nama"]);
        $kelahiran = htmlspecialchars($data["kelahiran"]);
        $tempatlahir = htmlspecialchars($data["tempatlahir"]);
        $pekerjaan = htmlspecialchars($data["pekerjaan"]);
        $genre = htmlspecialchars($data["genre"]);
        $instrumen = htmlspecialchars($data["instrumen"]);
        
        // upload gambar
        $gambar = upload();
        if (!$gambar){
            return false;
        };

        // query insert data (harus berurutan sesuai file di DBMS)
        $query = "INSERT INTO singer
                    VALUES
                ('', '$namapanggung', '$nama','$kelahiran', '$tempatlahir', '$pekerjaan'
                    , '$genre', '$instrumen', '$gambar')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload (){
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if ($error === 4){
            echo "<script>
                    alert('Pilih gambar terlebih dahulu!');
                    </script>";

                    return false;
        }

        // cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo "<script>
                    alert('Pilih gambar terlebih dahulu!');
                    </script>";

                    return false;
        }

        // cek jika ukuran file terlalu besar
        if ($ukuranFile > 2000000){
            echo "<script>
                    alert('Ukuran gambar terlalu besar!');
                    </script>";

                    return false;
        }

        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru   
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

        return $namaFileBaru;

    }

    function hapus ($id){
        global $conn;

        mysqli_query($conn, "DELETE FROM singer WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah ($data){
        global $conn;

        // ubah data dari setiap elemen dalam form
        $id = $data["id"];
        $namapanggung = htmlspecialchars($data["namapanggung"]);
        $nama = htmlspecialchars($data["nama"]);
        $kelahiran = htmlspecialchars($data["kelahiran"]);
        $tempatlahir = htmlspecialchars($data["tempatlahir"]);
        $pekerjaan = htmlspecialchars($data["pekerjaan"]);
        $genre = htmlspecialchars($data["genre"]);
        $instrumen = htmlspecialchars($data["instrumen"]);
        $gambarLama = htmlspecialchars($data["gambarLama"]);

        //  cek apakah user pilih gambar baru atau tidak
        if ($_FILES['gambar']['error'] === 4){
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }

        // query update data (harus berurutan sesuai file di DBMS)
        $query = "UPDATE singer SET
                    namaPanggung = '$namapanggung',
                    namaLahir = '$nama',
                    kelahiran = '$kelahiran',
                    tempatLahir = '$tempatlahir',
                    pekerjaan = '$pekerjaan',
                    genre = '$genre',
                    instrumen = '$instrumen',               
                    gambar = '$gambar'
                WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari ($keyword){
        global $conn;

        $query = "SELECT * FROM singer 
                    WHERE
                    namaPanggung LIKE '%$keyword%' OR
                    namaLahir LIKE '%$keyword%' OR
                    kelahiran LIKE '%$keyword%' OR
                    tempatLahir LIKE '%$keyword%' OR
                    pekerjaan LIKE '%$keyword%' OR
                    genre LIKE '%$keyword%' OR
                    instrumen LIKE '%$keyword%'
                ";

        return query($query);
    }
?>