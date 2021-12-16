<?php
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    
    //Import para o start do slim php.
    require_once("vendor/autoload.php");
    
    $config = [
        'settings' => [
            'displayErrorDetails' => true, # change this <------
            'determineRouteBeforeAppMiddleware' => true,
            'displayErrorDetails' => true,
            'addContentLengthHeader' => false
        ],
    ];

    $app = new \Slim\App($config);

    $app->get('/categorias', function($request, $response, $args){

        require_once("../crudCategorias/functions/config.php");
        require_once('../crudCategorias/controles/exibeDadosCategorias.php');

        if($listDados = exibirCategorias())
        
        if($listDadosArray = criarArray($listDados))
            $listDadosJSON = criarJSON($listDadosArray);

    
        if($listDadosArray)
        {
            return $response    ->withStatus(200)  
                                ->withHeader('Content-Type', 'application/json')
                                ->write($listDadosJSON);           
        
        }else{
            return $response -> withStatus(200)
            ->withHeader('Content-Type', 'application/json')
            ->write('{"message":"não ha dados para essa requisição"}');
        }

    });

    $app->run();

?>