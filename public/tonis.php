<?php
require __DIR__ . '/../vendor/autoload.php';

$app = new \Tonis\App();
$app->get('/hello/{name}', function($req, $res) {
    $res->end("Tonis: Hello {$req->getAttribute('name')}");
});

$server = Zend\Diactoros\Server::createServer($app, $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
$server->listen();
