<?php
require __DIR__ . '/../vendor/autoload.php';

$app = \Zend\Expressive\AppFactory::create();
$app->get('/hello/{name}', function($req, $res) {
    $res->end("Expressive: Hello {$req->getAttribute('name')}");
});

$server = Zend\Diactoros\Server::createServer($app, $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
$server->listen();
