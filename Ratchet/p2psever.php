<?php
include_once 'Chat.php';
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
//use MyApp\Chat;

require dirname(__DIR__) . '/Ratchet/vendor/autoload.php';
$port=8080;
$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat()
        )
    ),
    $port+20
);

$server->run();

header('Location:wstest2.php');