<?php
require('../partials/header.php');
require('../partials/nav.php'); ?>
<div class="container">
    <h1 class="mt-5">Ubah Berita</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $news["id"]; ?>">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="title" value="<?= $news["title"]; ?>" class="form-control" id="judul" placeholder="Masukkan judul berita" required>
        </div>
        <div class="mb-3">
            <label for="konten" class="form-label">Konten</label>
            <input class="form-control" name="content" value="<?= $news["content"]; ?>" id="konten" rows="5" placeholder="Masukkan konten berita" required></input>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="image" value="<?= $news["image"]; ?>" class="form-control" id="gambar" required>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" name="category" value="<?= $news["category"]; ?>" id="kategori" required>
                <option selected disabled value="">Pilih kategori berita</option>
                <option value="politik">Politik</option>
                <option value="ekonomi">Ekonomi</option>
                <option value="olahraga">Olahraga</option>
            </select>
        </div>
        <button type="submit" name="publish" class="btn btn-primary">Ubah Berita</button>
    </form>
</div>

<?php
require('../partials/footer.php') ?>