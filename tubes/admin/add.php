<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("location: login.php");
  exit;
}

require('../functions.php');

$title = 'Add News | No\'Akem';

if (isset($_POST['publish'])) {
  if (createNews($_POST) > 0) {
    echo "
        <script>
          alert('Data berhasil ditambahkan!');
          document.location.href = '../admin.php';
        </script>
      ";
  } else {
    echo "
        <script>
          alert('Data gagal ditambahkan!');
        </script>
      ";
  }
}

require('../views/add.views.php');
