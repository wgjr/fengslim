<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/quiz/{quiz}', function (Request $request, Response $response, array $args) {
    $quiz = new quiz();

    $return['data'] = $quiz->get($args['quiz']);

    return json_encode($return);
});

$app->post('/quiz/{name}', function (Request $request, Response $response, array $args) {
    $resposta = array();

    return json_encode($resposta);
});

$app->delete('/quiz/{name}', function (Request $request, Response $response, array $args) {
    $resposta = array();

    return json_encode($resposta);
});

$app->put('/quiz/{name}', function (Request $request, Response $response, array $args) {
    $resposta = array();

    return json_encode($resposta);
});