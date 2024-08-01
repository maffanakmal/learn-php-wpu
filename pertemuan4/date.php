<?php 
    // BUILT IN FUNCTION
    // Date : Untuk menampilakan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH Time
    // Detik yang sidah berlalu sejak 1 januari 1970 sampai saat ini
    // echo time();

    // echo date("l, d M Y", time()+60*60*24*100);

    // mktime : Membuat sendiri detik
    // mktime(0, 0, 0 ,0 ,0 ,0);
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l, d M Y", mktime(0, 0, 0, 6, 26, 2003));

    // strtotime
    // echo date("l, d M Y", strtotime("26 jun 2003"));

    // String
    // strlen() : menghitung panjang dari string
    // $str = 'abcdef';
    // echo strlen($str);

    // strcmp() : membandingkan string
    // $var1 = "Hello";
    // $var2 = "hello";
    // if (strcmp($var1, $var2) !== 0) {
    //     echo '$var1 is not equal to $var2 in a case sensitive string comparison';
    // }

    // explode() : memecahkan string menjadi array
    // Example 1
    // $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
    // $pieces = explode(" ", $pizza);
    // echo $pieces[0]."<br>";
    // echo $pieces[1];
    
    // Example 2
    // $data = "foo:*:1023:1000::/home/foo:/bin/sh";
    // list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
    // echo $user."<br>";
    // echo $pass."<br>";
    // echo $uid."<br>";
    // echo $home."<br>";

    // htmlspecialchars() : untuk menjaga website dari hacker
    // $new = htmlspecialchars("<a href='test'>Test</a>", 'ENT_QUOTES');
    // echo $new;

    // Utility
    // var_dump() : mencetak isi dari sebuah variabel, array, objek
    // $a = array(1, 2, array("a", "b", "c"));
    // var_dump($a);

    // isset() : mengecek sebuah variabel sudah pernah dibikin / belum
    // // This will evaluate to TRUE so the text will be printed.
    // if (isset($var)) {
    //     echo "This var is set so I will print.";
    // }

    // // In the next examples we'll use var_dump to output
    // // the return value of isset().

    // $a = "test";
    // $b = "anothertest";

    // var_dump(isset($a));      // TRUE
    // var_dump(isset($a, $b)); // TRUE

    // unset ($a);

    // var_dump(isset($a));     // FALSE
    // var_dump(isset($a, $b)); // FALSE

    // $foo = NULL;
    // var_dump(isset($foo));   // FALSE

    // empty() : mengecek variabel kosong atau tidak
    // $var = 0;

    // // Evaluates to true because $var is empty
    // if (empty($var)) {
    //     echo '$var is either 0, empty, or not set at all';
    // }

    // // Evaluates as true because $var is set
    // if (isset($var)) {
    //     echo '$var is set even though it is empty';
    // }

    // die() : memberhentikan program
    // sleep() : memberhentikan sementara
?>  