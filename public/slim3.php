<?php
require __DIR__ . '/../vendor/autoload.php';
$_SERVER['SCRIPT_NAME'] = 'slim.php';
$app = new Slim\App();

$app->get('/hello/{name}', function ($request, $response, $args) {
    $response->write("Slim: Hello, " . $args['name']);
    return $response;
});

$app->run();
