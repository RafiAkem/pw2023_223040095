<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Landing Page</title>
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
  .navbar-brand {
    font-family: Viga;
    font-size: 32px;
  }

  .judul-berita {
    color: black;
    font-weight: bold;
    text-decoration: none;
  }
</style>

<body>
  <!-- Nav Start -->
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
        <form class="d-flex" role="search">
          <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="navbar-nav my-2">
          <a class="nav-item btn btn-primary ms-3" href="login.php">Login</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Nav End -->
  <!-- HEADER START -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/carousel1.png" style="width:1000px; height:562px" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Negeri Banyak Impor</h5>
          <h6>Some representative placeholder content for the first slide.</h6>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/carousel2.png" style="width:1000px; height:562px" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <h6>Some representative placeholder content for the second slide.</h6>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/carousel3.png" style="width:1000px; height:560px" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <h6>Some representative placeholder content for the third slide.</h6>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- HEADER END -->
  <br>
  <!-- START LATEST NEWS -->
  <div class="header-1">
    <h2>LATEST</h2>
    <div class="card-berita d-flex align-items-start mb-3">
      <div class="mr-3">
        <img src="https://cdn01.metrotvnews.com/dynamic/content/2023/05/02/KZmCva6L/t_64513ee7def41.webp?w=200" class="img-fluid rounded" alt="">
      </div>
      <div class="d-flex flex-column">
        <a href="berita1.php" class="judul-berita" title="Test"><span class="mt-0">Negeri Banyak Impor</span></a><br>
        <span>Economic Challenges</span>
      </div>
    </div>
    <div class="card-berita d-flex align-items-start mb-3 ml-auto">
      <div class="mr-3">
        <img src="https://cdn01.metrotvnews.com/dynamic/content/2023/05/02/kj2CA2zy/t_64513da9af398.webp?w=200" class="img-fluid rounded" alt="">
      </div>
      <div class="d-flex flex-column">
        <a href="#" class="judul-berita" title="Test"><span class="mt-0">Top Review: Kasus Lift Bandara Kualanamu, Siapa Tanggung Jawab?</span></a><br>
        <span>Top News</span>
      </div>
    </div>
    <div class="card-berita d-flex align-items-start">
      <div class="mr-3">
        <img src="https://cdn01.metrotvnews.com/dynamic/content/2023/05/02/KXyC9ERP/t_64513cc6d90cc.webp?w=200" class="img-fluid rounded" alt="">
      </div>
      <div class="d-flex flex-column">
        <a href="#" class="judul-berita" title="Test"><span class="mt-0">Kasat Narkoba Polres Jaktim Tewas di Rel Kereta, Dibunuh?</span></a><br>
        <span>Top News</span>
      </div>
    </div>
  </div>

  <br>
  <br>
  <br>

  <footer class="text-center text-lg-start text-white" style="background-color: #929fba; width: 100%;">
    <!-- Grid container -->
    <div class="container-fluid">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              No'Akem
            </h6>

          </div>
          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-envelope mr-3"></i> yc66zio@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> +62 89654782430</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

            <!-- Facebook -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
            <!-- Github -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!" role="button"><i class="fab fa-github"></i></a>
          </div>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2020 Copyright:
      <a class="text-white" href="#">Rafi Ikhsanul Hakim</a>
    </div>
  </footer>









  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>