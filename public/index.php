<?php
define('base_url','http://localhost/produk/');

function path($path = ''){
    return 'http://localhost/produk/'.$path;
}

require_once __DIR__ . '/../core/App.php';
require_once __DIR__ . '/../core/Controller.php';

$app = new App();
