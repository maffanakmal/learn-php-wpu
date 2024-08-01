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
        $gambar = htmlspecialchars($data["gambar"]);

        // query insert data (harus berurutan sesuai file di DBMS)
        $query = "INSERT INTO singer
                    VALUES
                ('', '$namapanggung', '$nama','$kelahiran', '$tempatlahir', '$pekerjaan'
                    , '$genre', '$instrumen', '$gambar')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
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
        $gambar = htmlspecialchars($data["gambar"]);

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
?>