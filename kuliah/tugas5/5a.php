<?php 
$mahasiswa = [
    [
        "Nama" => "Rafi Ikhsanul Hakim",
        "NRP" => "223040095",
        "Email" => "yc66zio@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "rafi.png"
    ],
    [
        "Nama" => "Lurah Partayono",
        "NRP" => "223040099",
        "Email" => "yc45zio@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "2.png"
    ],
    [
        "Nama" => "Fachri aditya",
        "NRP" => "223040091",
        "Email" => "yc69zio@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "3.png"
    ],
    [
        "Nama" => "Putra Simatupang",
        "NRP" => "223040092",
        "Email" => "yc33fik@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "4.png"
    ],
    [
        "Nama" => "Aqsa Arkananta",
        "NRP" => "223040093",
        "Email" => "yc12lan@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "5.png"

    ],
    [
        "Nama" => "Rendy Tipes",
        "NRP" => "223040094",
        "Email" => "zizi12@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "6.png"
    ],
    [
        "Nama" => "Zizi Rahman",
        "NRP" => "223040012",
        "Email" => "gugugaga123@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "7.png"
    ],
    [
        "Nama" => "Umar Patreon",
        "NRP" => "223040011",
        "Email" => "UmarLOL123@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "8.png"
    ],
    [
        "Nama" => "Sven Assalamualaikum",
        "NRP" => "223040017",
        "Email" => "asep13K@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "9.png"
    ],
    [
        "Nama" => "Alfarizi Respect",
        "NRP" => "223040090",
        "Email" => "NasibSama@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "10.png"
    ]
]




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $m) : ?>

        <ul>
            <li>
                <img src="img/<?=$m["Gambar"]; ?>">
            </li>
            <li>Nama : <?=$m["Nama"]; ?></li>
            <li>NRP : <?=$m["NRP"]; ?></li>
            <li>Email : <?=$m["Email"]; ?></li>
            <li>Jurusan : <?=$m["Jurusan"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>