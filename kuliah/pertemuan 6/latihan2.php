
<?php 
// Array Associative
// array yang indexnya adalah string yang kita buat sendiri
$mahasiswa = [
    ['Nama' => 'Rafi',
    'Binatang' => '🐵',
    'Makanan' => ['🍣']],
    ['Nama' => 'Firza',
    'Binatang' => '🦓',
    'Makanan' => ['🍕']],
    ['Nama' => 'Darren',
    'Binatang' => '🐊',
    'Makanan' =>['🥪','🌮']],
    ['Nama' => 'Citayem',
    'Binatang' =>'🐲',
    'Makanan' =>['🎂']],
    ['Nama' => 'Atta',
    'Binatang' =>'🐔',
    'Makanan' =>['🍓']]
];
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
    <?php foreach($mahasiswa as $i) { ?>
    <ul>
     <li>Nama : <?= $i["Nama"]; ?></li>
     <li>Peliharaan : <?= $i["Binatang"]; ?></li>
     <li>Favorit Makanan : 
         <?php foreach($i["Makanan"] as $mkn) {?>
            <?= $mkn; ?>
            <?php } ?>
        </li>
    </ul>
    <?php } ?>
</body>
</html>