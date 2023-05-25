<?php
require('partials/header.php');
require('partials/nav.php'); ?>
<div class="container">
    <h1>Halaman</h1>

    <h3>Daftar Mahasiswa :</h3>
    <?php foreach ($students as $student) : ?>
        <ul>
            <li>Nama : <?= $student["nama"]; ?></li>
            <li>NPM : <?= $student["npm"]; ?></li>
            <li>Email : <?= $student["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</div>

<?php require('partials/footer.php') ?>