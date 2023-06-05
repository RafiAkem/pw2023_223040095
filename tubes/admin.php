<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("location: login.php");
  exit;
}

require('functions.php');
$news = query("SELECT * FROM berita");

require('partials/header.php');

?>

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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Berita
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Terbaru</a></li>
              <li><a class="dropdown-item" href="#">Populer</a></li>
            </ul>
          </li>
        </ul>
        <img src="user.png" class="img-fluid" style="width:2%">
        <div class="navbar-nav my-2">
          <a class="nav-item btn btn-primary ms-3" href="logout.php">Sign Out</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 col-sm-12 card-container">
        <div class="card text-center">
          <div class="card-header">
            <h4>Dashboard Admin</h4>
          </div>
          <div class="card-body">
            <p>Selamat Datang Admin!</p>
            <a href="admin/add.php" class="btn btn-success">Tambah Berita</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php foreach ($news as $item) : ?>
    <div class="card my-5 mx-5 justify-content-center">
      <div class="card-body">
        <h5 class="card-title"><?= $item['title']; ?></h5>
        <p class="card-text"><?= $item['content']; ?></p>
        <button type="button" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  <?php endforeach; ?>

</body>

</html>