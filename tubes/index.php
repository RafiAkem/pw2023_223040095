<?php require('partials/header.php') ?>
<style>
  .judul-berita {
    color: black;
    font-weight: bold;
    text-decoration: none;
  }
</style>

<body>
  <?php require('partials/nav.php') ?>
  <!-- CAROUSEL START -->
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
          <h5>Kasus Lift Bandara Kualanamu, Siapa Tanggung Jawab?</h5>
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
  <!-- CAROUSEL END -->
  <br>
  <!-- START LATEST NEWS -->
  <div class="header-1 mx-4">
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

  <?php
  require('partials/footer.php') ?>









  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>