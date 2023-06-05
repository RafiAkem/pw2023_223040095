<?php
require('functions.php');

$news = query("SELECT * FROM berita");

require('views/index.views.php');
