<?php require('partials/header.php') ?>
<style>
  .judul-berita {
    color: black;
    font-weight: bold;
    text-decoration: none;
  }

  .card-title {
    font-family: 'Comfortaa', cursive;
    font-weight: bold;
  }

  .card {
    font-family: 'Comfortaa', cursive;
  }
</style>

<body>
  <?php require('partials/nav.php') ?>
  <!-- CAROUSEL START -->
  <div class="bg-image" style="background-image: url('img/indonesia.jpg'); height: 650px; background-size: cover; background-position: center;">
    <div class="d-flex justify-content-center align-items-center h-100">
      <form class="d-flex w-50">
        <input class="form-control me-2" name="keyword" id="keyword" type="search" placeholder="Search" aria-label="Search" autofocus autocomplete="off">
      </form>
    </div>
  </div>

  <!-- CAROUSEL END -->
  <br>
  <!-- START LATEST NEWS -->
  <h3>LATEST NEWS</h3>
  <div class="row" id="search-container">
    <?php foreach ($news as $item) : ?>
      <div class="col-md-6">
        <div class="card mb-3 mx-3" style="max-width: 900px;">
          <div class="row g-0">
            <div class="col-md-4">
              <a href="./berita.php?id=<?= $item['id'] ?>" class="card-link">
                <img src="./img/upload/<?= $item['image'] ?>" class="img-fluid rounded-start" style="object-fit:cover; width:540px; height:300px;" alt=" ...">
              </a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">
                  <a href="./berita.php?id=<?= $item['id'] ?>" class="card-link text-decoration-none text-reset"><?= $item['title'] ?></a>
                </h5>
                <p class="card-text text-truncate"><?= $item['content']; ?></p>
                <p class="card-text text-capitalize"><?= $item['category']; ?></p>
                <p class="card-text"><small class="text-body-secondary"><?= $item['timestamp'] ?></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <!-- END LATEST NEWS -->
  <?php require('partials/footer.php') ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>