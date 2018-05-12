<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/hello/{card}', function (Request $request, Response $response, array $args) {
    //$response->getBody()->write("Hello, $name");

    $resposta = array();

    return json_encode($resposta);
});

$app->post('/hello/{name}', function (Request $request, Response $response, array $args) {
    //$response->getBody()->write("Hello, $name");

    $resposta = array();

    return json_encode($resposta);
});

$app->delete('/hello/{name}', function (Request $request, Response $response, array $args) {
    //$response->getBody()->write("Hello, $name");
    //$allPostPutVars = $request->getParsedBody();

    $resposta = array();

    return json_encode($resposta);
});

$app->put('/hello/{name}', function (Request $request, Response $response, array $args) {
    //$response->getBody()->write("Hello, $name");

    $resposta = array();

    return json_encode($resposta);
});