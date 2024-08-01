<?php
    // SUPERGLOBALS
    // Variable global milik PHP
    // Merupakan array associative

    // $_GET
    
    $singer = [
        [
            "nama panggung" => "Hayley Williams",
            "nama lahir" => "Hayley Nichole Williams", 
            "kelahiran" => "27 Desember 1988",
            "tempat lahir" => "Meridian, Mississipi, Amerika Serikat",
            "pekerjaan" => "Musisi, Penulis Lagu",
            "genre" => "Rock Alternatif, Emo, Pop, Punk", 
            "instrumen" => "Vokal, Gitar, Keyboard, Piano, Drums",
            "gambar" => "hayleywilliams.png"
        ],
        [
            "nama panggung" => "Anne-Marie", 
            "nama lahir" => "Anne-Marie Rose Nicholson",
            "kelahiran" => "7 April 1991", 
            "tempat lahir" => "East Tilbury, Essex, Inggris",
            "pekerjaan" => "Penyayi, Penulis Lagu",
            "genre" => "Pop, Grime, R and B", 
            "instrumen" => "Vokal",
            "gambar" => "annemarie.png"
        ],
        [
            "nama panggung" => "Jess Glynne", 
            "nama lahir" => "Jessica Hannah Glynne",
            "kelahiran" => "20 Oktober 1989",
            "tempat lahir" => "Hampstead, London, Inggris",
            "pekerjaan" => "Penyayi, Penulis Lagu",
            "genre" => "Pop, R&B, Dance, Soul", 
            "instrumen" => "Vokal, Piano",  
            "gambar" => "jessglynne.png"
        ],
        [
            "nama panggung" => "Adele", 
            "nama lahir" => "Adele Laurie Blue Adkins",
            "kelahiran" => "5 Mei 1988", 
            "tempat lahir" => "London, Inggris",
            "pekerjaan" => "Penyayi, Penulis Lagu",
            "genre" => "Pop, R&B, Blue Eyed, Soul", 
            "instrumen" => "Vokal", 
            "gambar" => "adele.png"
        ],
        [
            "nama panggung" => "Astrid S", 
            "nama lahir" => "Astrid Smeplass",
            "kelahiran" => "29 Oktober 1996", 
            "tempat lahir" => "Berkak, Norwegia",
            "pekerjaan" => "Penyayi, Penulis Lagu",
            "genre" => "Pop, Alternative Pop, Electropop", 
            "instrumen" => "Vokal, Gitar, Piano",
            "gambar" => "astrids.png"
        ],
        [
            "nama panggung" => "Avril Lavigne", 
            "nama lahir" => "Avril Ramona Lavigne",
            "kelahiran" => "27 September 1984", 
            "tempat lahir" => "Belleville, Ontario, Kanada",
            "pekerjaan" => "Penyayi, Penulis Lagu, Aktris",
            "genre" => "Pop Punk, Pop Rock, Alternative Rock, Post-Grunge", 
            "instrumen" => "Vokal, Gitar, Piano, Keyboard, Drum", 
            "gambar" => "avrillavigne.png"
        ],
        [
            "nama panggung" => "Dua Lipa", 
            "nama lahir" => "Dua Lipa",
            "kelahiran" => "22 Agustus 1995", 
            "tempat lahir" => "London, Inggris",
            "pekerjaan" => "Penyayi, Penulis Lagu",
            "genre" => "Pop, Disco, House, R and B", 
            "instrumen" => "Vokal",
            "gambar" => "dualipa.png"
        ],
        [
            "nama panggung" => "Taylor Swift", 
            "nama lahir" => "Taylor Alison Swift",
            "kelahiran" => "13 Desember 1989", 
            "tempat lahir" => "West Reading, Pennsylvania, Amerika Serikat",
            "pekerjaan" => "Penyayi, Penulis Lagu, Produser, Aktris, Sutradara, Pengusaha",
            "genre" => "Pop, County, Rock, Synth-Rock, Country Pop", 
            "instrumen" => "Vokal, Gitar, Piano, Banjo, Ukulele",
            "gambar" => "taylorswift.png"
        ],
        [
            "nama panggung" => "Selena Gomez",
            "nama lahir" => "Selena Marie Gomez", 
            "kelahiran" => "22 Juli 1992", 
            "tempat lahir" => "Grand Prairie, Texas, Amerika Serikat",
            "pekerjaan" => "Penyayi, Aktris, Produser, Pengusaha",
            "genre" => "Pop, Dance-pop, Electropop", 
            "instrumen" => "Vokal",
            "gambar" => "selenagomez.png"
        ],
        [
            "nama panggung" => "Ariana Grande", 
            "nama lahir" => "Ariana Grande-Butera",
            "kelahiran" => "26 Juni 1993", 
            "tempat lahir" => "Boca Raton, Florida",
            "pekerjaan" => "Penyayi, Penulis Lagu, Aktris",
            "genre" => "Pop, R and B", 
            "instrumen" => "Vokal",
            "gambar" => "arianagrande.png"
        ], 
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>PENYANYI WANITA</h1>
    <ul>
        <?php foreach($singer as $sgr) : ?>
            <li>
                <a href="latihan2.php?namapanggung=<?= $sgr["nama panggung"]; 
                ?>&namalahir=<?= $sgr["nama lahir"]; 
                ?>&kelahiran=<?= $sgr["kelahiran"]; 
                ?>&tempatlahir=<?= $sgr["tempat lahir"]; 
                ?>&pekerjaan=<?= $sgr["pekerjaan"]; 
                ?>&genre=<?= $sgr["genre"]; 
                ?>&instrumen=<?= $sgr["instrumen"]; 
                ?>&gambar=<?= $sgr["gambar"]; 
                ?>"><?= $sgr["nama panggung"]; ?></a>
            </li>
        <?php endforeach; ?>    
    </ul>
</body>
</html>