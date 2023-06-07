<?php
require('functions.php');

$id = $_GET['id'];

if (!$id) {
    header("Location: index.php");
    exit;
}

$item = query("SELECT * FROM berita WHERE id = $id")[0];
$comments = query("SELECT * FROM comments WHERE news_id = $id ORDER BY created_at DESC");

if (isset($_POST['submit-comment'])) {
    if (comment($_POST) > 0) {
        echo "<script>
                alert('Komentar berhasil ditambahkan!');
                document.location.href = 'berita.php?id=$id';
            </script>";
    } else {
        echo "<script>
                alert('Komentar gagal ditambahkan!');
                document.location.href = 'berita.php?id=$id';
            </script>";
    }
}
require('views/berita.view.php');
