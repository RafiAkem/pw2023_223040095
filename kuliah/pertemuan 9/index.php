<?php
require('functions.php');
$title = 'Home';
$students = [
    [
        "nama" => "Rafi",
        "npm" => "223040095",
        "email" => "yc66zio@gmail.com"
    ],
    [
        "nama" => "Rafi",
        "npm" => "223040095",
        "email" => "yc66zio@gmail.com"
    ],
];

// dd($_SERVER["REQUEST_URI"]);
// /pw2023_223040095/kuliah/pertemuan%209/
require('views/index.view.php');
