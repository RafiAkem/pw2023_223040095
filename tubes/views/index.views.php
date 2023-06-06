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
  <h3>LATEST NEWS</h3>
  <?php foreach ($news as $item) : ?>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <a href="#" class="card-link">
            <img src="./img/upload/<?= $item['image'] ?>" class="img-fluid rounded-start" style="width:200px; height:250px;" alt=" ...">
          </a>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">
              <a href="#" class="card-link text-decoration-none text-reset"><?= $item['title'] ?></a>
            </h5>
            <p class="card-text text-truncate"><?= $item['content']; ?></p>
            <p class="card-text"><small class="text-body-secondary"><?= $item['timestamp'] ?></small></p>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  </div>



  <?php
  require('partials/footer.php') ?>









  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>