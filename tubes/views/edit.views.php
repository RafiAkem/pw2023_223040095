<?php
require('../partials/header.php');
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">No'Akem</a>
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
            <img src="../img/profile.jpg" class="img-fluid" style="width:2%">
            <div class="navbar-nav my-2">
                <a class="nav-item btn btn-primary ms-3" href="logout.php">Sign Out</a>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <a href="../admin.php" class="btn btn-primary mt-5">Kembali</a>
    <h1>Ubah Berita</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $news["id"]; ?>">
        <input type="hidden" name="oldImage" value="<?= $news["image"]; ?>">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="title" value="<?= $news["title"]; ?>" class="form-control" id="judul" placeholder="Masukkan judul berita" required>
        </div>
        <div class="mb-3">
            <label for="konten" class="form-label">Konten</label>
            <textarea class="form-control" name="content" id="konten" rows="5" placeholder="Masukkan konten berita"><?= $news["content"]; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="image" class="form-control" id="gambar" onchange="previewImage(event); updateText();">
            <h5 class="my-3" id="gambar-text">Gambar Saat Ini</h5>
            <img src="../img/upload/<?= $news["image"] ?>" alt="" id="preview">
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" name="category" id="kategori">
                <option value="" disabled>Pilih kategori berita</option>
                <option value="politik" <?= $news["category"] == "politik" ? "selected" : ""; ?>>Politik</option>
                <option value="ekonomi" <?= $news["category"] == "ekonomi" ? "selected" : ""; ?>>Ekonomi</option>
                <option value="olahraga" <?= $news["category"] == "olahraga" ? "selected" : ""; ?>>Olahraga</option>
            </select>
        </div>
        <button type="submit" name="publish" class="btn btn-primary mb-2">Ubah Berita</button>
    </form>
</div>

<script>
    // Ganti text dari "Gambar Saat Ini" menjadi "Gambar Sekarang"
    function updateText() {
        document.getElementById("gambar-text").innerHTML = "Gambar Sekarang";
    }

    // Preview gambar
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var preview = document.getElementById('preview');
            preview.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
<?php
require('../partials/footer.php') ?>