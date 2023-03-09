<?php 

// ARRAY

// Membuat array

$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$myArray = ["Rafi", 18, false];
$binatang =["🐵","🦓","🐊","🐲"];

// Mencetak array
// mencetak 1 elemen di dalam array menggunakan echo

echo $bulan[2];
echo "<hr>";

// Mencetak semua isi array
// var_dump, print_r
// var_dump lebih lengkap

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($myArray);
echo "<br>";
print_r($binatang);
echo "<hr>";

// Manipulasi Array
// menambahkan elemen menggunakan index
$hari[3]="Kamis";
print_r($hari);
echo "<br>";

//Menambahkan elemen di akhir array menggunakan [] (Index kosong)

$hari[] = "Jum'at";
$hari[] = "Sabtu";
print_r($hari);
echo "<hr>";

// menambah elemen di akhir array menggunakan array_push
array_push($bulan, "April", "Mei", "Juni");
print_r($bulan);
echo "<br>";

// menambah elemen di awal array menggunakan array_unshift  

array_unshift($binatang, "🐔");
print_r($binatang);

echo "<hr>";

//menghapus elemen di belakang array dengan array_pop

array_pop($hari);
print_r($hari);
echo "<hr>";

//menghapus elemen di depan array dengan array_shift
array_shift($bulan);
print_r($bulan);

?>