<?php  
require_once __DIR__ . '/vendor/autoload.php';

use Mpdf\Mpdf;

$mpdf = new Mpdf();

require('functions.php');

$id = $_GET['id'];

// Cek apakah id kosong jika kosong redirect ke index.php
if (!$id) {
  header('Location: index.php');
  exit;
}

// Ambil data berita berdasarkan id
$item = query("SELECT * FROM berita WHERE id = $id")[0];

$html = '<!DOCTYPE html>
  <html>
  <head>
      <title>' . $item['title'] . '</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
              <h1 class="mb-3">' . $item['title'] . '</h1>
              <img src="./img/upload/' . $item['image'] . '" alt="image" class="img-fluid mb-3 ratio ratio-16x9">
              <p class="whitespace-pre-wrap">' . nl2br($item['content']) . '</p>
            </div>
        </div>
    </div>
  </body>
  </html>';

$mpdf->WriteHTML($html);

$mpdf->Output('news.pdf', 'I');
