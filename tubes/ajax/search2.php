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
        <div class="card my-3 mx-5 justify-content-center">
            <div class="card-body">
                <a href="./berita.php?id=<?= $item['id'] ?>" class="card-title text-decoration-none text-reset h5"><?= $item['title']; ?></a>
                <p class="card-text"><?= $item['timestamp']; ?></p>
                <a href="admin/edit.php?id=<?= $item['id']; ?>" class="btn btn-primary">Edit</a>
                <a href="admin/delete.php?id=<?= $item['id']; ?>" onclick="return confirm('yakin?');" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <div class="row">
        <div class="col-md-6 mx-5">
            <div class="alert alert-danger" role="alert">
                Data Tidak Ditemukan!
            </div>
        </div>
    <?php endif; ?>