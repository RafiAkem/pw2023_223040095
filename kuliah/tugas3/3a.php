<?php 

echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r) {
    $luas = 3.14 * $r * $r;

    echo "Jari-jari = $r cm.<br>";
    echo "Luas lingkaran = $luas cm<sup>2</sup>";
    echo "<hr>";
}

hitungLuasLingkaran(10);

echo "<h4>Menghitung keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r) {
    $keliling = 2 * 3.14 * $r;

    echo "Jari-jari = $r cm.<br>";
    echo "Keliling lingkaran = $keliling cm";
    echo "<hr>";
}

hitungKelilingLingkaran(20);
?>