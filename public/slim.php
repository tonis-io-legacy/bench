<?php
require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\Slim();
$app->get('/hello/name', function ($name) {
    echo "Slim: Hello, " . $name;
});
$app->run();
