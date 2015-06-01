<?php
require __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();
$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Silex: Hello '. $app->escape($name);
});
$app->run();
