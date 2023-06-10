<?php
require('../functions.php');

$title = 'Delete News | No\'Akem';

$id = $_GET['id'];

if (deleteNews($id) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = '../admin.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = '../admin.php';
        </script>
    ";
}
