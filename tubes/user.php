<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

require('functions.php');
$title = 'User | No\'Akem';

// Ambil data user
$users = query("SELECT * FROM user");
?>
<title>Tabel User</title>
<?php require('partials/header.php'); ?>
<style>
    .navbar-brand {
        font-family: Viga;
        font-size: 32px;
    }

    .card-container {
        margin-top: 50px;
    }

    .card-body {
        font-family: Viga;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">No'Akem</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <img src="user.png" class="img-fluid" style="width:2%">
                <div class="navbar-nav my-2">
                    <a class="nav-item btn btn-primary ms-3" href="logout.php">Sign Out</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-6">
            <a href="admin.php" class="btn btn-info my-5 mx-3">Kembali Ke Halaman Utama Admin</a>
        </div>
    </div>


    <!-- tabel data user -->
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Username</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td>
                            <img src="default.jpg" width="50">
                        </td>
                        <td><?= $user['username']; ?></td>
                        <td>
                            <a href="admin/user.delete.php?id=<?= $user['id']; ?>" onclick="return confirm('yakin?');" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>

    <?php require('partials/footer.php') ?>