<?php
require '../functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM berita WHERE 
            title LIKE '%$keyword%' OR
            content LIKE '%$keyword%' OR
            timestamp LIKE '%$keyword%' OR
            category LIKE '%$keyword%'
            ";

$news = query($query);
?>
<?php if ($news) : ?>
    <?php foreach ($news as $item) : ?>
        <div class="col-md-6">
            <div class="card mb-3 mx-3" style="max-width: 900px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="#" class="card-link">
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
<?php else : ?>
    <div class="row">
        <div class="col-md-6 mx-5">
            <div class="alert alert-danger" role="alert">
                Berita Tidak Ditemukan!
            </div>
        </div>
    <?php endif; ?>