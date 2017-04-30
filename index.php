<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->post('/hello', function (Request $request, Response $response) {
    $username = $request->getParam('username');
    $data = array('message' => "Hello $username");
    $json_string = json_encode($data, JSON_PRETTY_PRINT);
    $response->getBody()->write("$json_string");
    return $response;
});
$app->run();
