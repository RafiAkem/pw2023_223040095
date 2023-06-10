<?php
require('functions.php');
$title = 'Home | No\'Akem';;
$news = query("SELECT * FROM berita");

require('views/index.views.php');
