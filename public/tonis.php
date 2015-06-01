<?php
require __DIR__ . '/../vendor/autoload.php';

$tonis = new Tonis\Mvc\Tonis();
$routes = $tonis->getRouteCollection();
$routes->get('/hello/{name}', function($name) {
    return "Tonis: Hello $name";
});
$tonis->run();
