<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/quiz/{card}', function (Request $request, Response $response, array $args) {
    //$response->getBody()->write("Hello, $name");

    $resposta = array();

    return json_encode($resposta);
});

$app->post('/quiz/{name}', function (Request $request, Response $response, array $args) {
    //$response->getBody()->write("Hello, $name");

    $resposta = array();

    return json_encode($resposta);
});

$app->delete('/quiz/{name}', function (Request $request, Response $response, array $args) {
    //$response->getBody()->write("Hello, $name");
    //$allPostPutVars = $request->getParsedBody();

    $resposta = array();

    return json_encode($resposta);
});

$app->put('/quiz/{name}', function (Request $request, Response $response, array $args) {
    //$response->getBody()->write("Hello, $name");

    $resposta = array();

    return json_encode($resposta);
});