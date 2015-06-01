<?php
require __DIR__ . '/../vendor/autoload.php';

$app = new Laravel\Lumen\Application(realpath(__DIR__.'/../'));
$app->get('/hello/{name}', function($name) use ($app) {
    return 'Lumen: Hello ' . $name;
});
$app->run();
