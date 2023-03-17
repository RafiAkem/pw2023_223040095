<?php 
$film = [
    [
        'Poster' => '1917.png',   
        'Judul' => '1917',
        'Tahun' => '2019',
        'Genre' => ['Action,','Drama,','War'],
        'Pemeran Utama' => ['Dean-Charles Chapman,','George MacKay,','Daniel Mays'],
        'Sutradara' => ['Sam Mendes,','Krysty Wilson-Cairns']],
    [
        'Poster' => 'fury.png',
        'Judul' => 'Fury',
        'Tahun' => '2014',
        'Genre' => ['Action,','Drama,','War'],
        'Pemeran Utama' => ['Brad Pitt,','Shia LaBeouf,','Logan Lerman'],
        'Sutradara' => ['David Ayer']],
    [
        'Poster' => 'AQ1.png',
        'Judul' => 'All Quiet on the Western Front',
        'Tahun' => '2022',
        'Genre' => ['Action,','Drama,','War'],
        'Pemeran Utama' => ['Felix Kammerer,','Albrecht Schuch,','Aaron Hilmer,'],
        'Sutradara' => ['Edward Berger']],
    [
        'Poster' => 'Mavs.png',
        'Judul' => 'Top Gun: Maverick',
        'Tahun' => '2022',
        'Genre' => ['Action,','Drama'],
        'Pemeran Utama' => ['Tom Cruise,','Jennifer Connelly,','Miles Teller'],
        'Sutradara' => ['Joseph Kosinski']],
    [
        'Poster' => 'Six.png',
        'Judul' => 'Six',
        'Tahun' => '2018',
        'Genre' => ['Action,', 'Drama,','History'],
        'Pemeran Utama' => ['Barry Sloane,','Kyle Schmid,','Juan Pablo Raba'],
        'Sutradara' => ['William Broyles Jr.,','David Broyles']
    ]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
</head>
<body>
    <h2>Daftar Film</h2>
    <?php foreach ($film as $f)  {?>
    <ul>
        <li>
    <img src="img/<?= $f["Poster"]; ?>">        
    </li>
        <li>Judul : <?= $f['Judul']; ?></li>
        <li>Tahun : <?= $f['Tahun']; ?></li>
        <li>Genre : 
        <?php foreach($f["Genre"] as $g) { ?>    
        <?= $g; ?>
        <?php } ?>
    </li>
        <li>Pemeran Utama :
            <?php foreach($f["Pemeran Utama"] as $PU) { ?>
            <?= $PU; ?>
        <?php } ?> 
    </li>
        <li>Sutradara :
            <?php foreach($f["Sutradara"] as $s) { ?>
            <?= $s; ?> 
        <?php } ?>
        </li>
    </ul>
    <?php } ?>
</body>
</html>