<?php
define('base_url','http://localhost/simsek/');

function path($path = ''){
    return 'http://localhost/simsek/'.$path;
}

require_once __DIR__ . '/../core/App.php';
require_once __DIR__ . '/../core/Controller.php';
// Initialize the application

// database



$app = new App();
