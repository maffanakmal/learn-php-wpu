<?php
    // array :  variabel yang dapat memiliki banyak nilai
    // elemen pada array boleh memiliki tipe data yang berbeda
    // pasangan antara key dan value
    // key-nya adalah index, yang dimulai dari 0

    // membuat array
    // 1. cara lama
    $hari = array("senin", "selasa", "rabu");

    // 2. cara baru
    $bulan = ["januari", "februari", "maret"];
    $arr1 = [123, "text", false];

    // menampilkan array
    // var_dump() / print_r()
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);
    // echo "<br>";
    
    // menampilkan 1 elemen pada array
    // echo $arr1[0];
    // echo "<br>";
    // echo $bulan[1];
    
    // menambahkan elemen baru pada array
    var_dump($hari);
    $hari[] = "kamis";
    $hari[] = "jum'at";
    echo "<br>";
    var_dump($hari);


?>