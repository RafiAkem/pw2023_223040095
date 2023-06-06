<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

require('../functions.php');

//ambil data di URL
$id = $_GET['id'];

//query data berita berdasarkan id
$news = query("SELECT * FROM berita WHERE id = $id")[0];


//apakah tombol submit sudah ditekan atau belum
if (isset($_POST['publish'])) {

    //cek apakah data berhasil diubah atau tidak
    if (editNews($_POST) > 0) {
        echo "
        <script>
          alert('Data berhasil diubah!');
          document.location.href = '../admin.php';
        </script>
      ";
    } else {
        echo "
        <script>
          alert('Data gagal diubah!');
        </script>
      ";
    }
}

require('../views/edit.views.php');
