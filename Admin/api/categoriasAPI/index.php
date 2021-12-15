<?php
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    
    //Import para o start do slim php.
    require_once("vendor/autoload.php");
    
    $config = [
        'settings' => [
            'displayErrorDetails' => true # change this <------
        ],
    ];
    require_once("vendor/autoload.php");

    $app = new \Slim\App();

    $app->get('/categorias', function($request, $response, $args){
        return $response    ->withStatus(200)  
                            ->withHeader('Content-Type', 'application/json')
                            ->write('{"message":"Categoria encontrada com sucesso!"}');    
    
    });

    $app->run();

?>