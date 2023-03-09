
<?php 
$binatang =["🐵","🦓","🐊","🐲","🐔",];
$makanan =["🍣","🍕","🥪","🎂","🍓"];
$mahasiswa = ["Rafi", "Firza", "Darren", "Citayem", "Atta"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($binatang as $i => $m) { ?>
    <ul>
        <li>Nama : <?= $mahasiswa[$i]; ?></li>
     <li>Peliharaan : <?= $binatang[$i]; ?></li>
     <li>Favorit Makanan : <?= $makanan[$i]; ?></li>
    </ul>
    <?php } ?>
</body>
</html>