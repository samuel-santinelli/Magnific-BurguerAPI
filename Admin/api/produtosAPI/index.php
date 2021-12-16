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

    //Instancia da classe Slim\App, é realizada para termos acesso aos métodos da classe.
    $app = new \Slim\App($config);

    
    

    //Chamando no banco pela queryString
    //http://localhost/ds2t20212/samuel/ProjectHamburgueria2/Admin/api/produtos?nome=Cheddar

    

    // Instancia da classe Slim\App, é realizada para que possamos ter acesso aos metodos da classe
    // $app = new \Slim\App();

    $app->get('/produtos', function($request, $response, $args){

        require_once("../crudProdutos/functionsProducts/config.php");
        require_once('../crudProdutos/controlesProducts/exibeDadosProdutos.php');
    
        if(isset($request->getQueryParams()['nome']))
        {
            
            $nome = (string) null;

            $nome = $request->getQueryParams()['nome'];
            
            if($listDados = buscarNomeProdutos($nome))
            if($listDadosArray = criarArray($listDados))
                $listDadosJSON = criarJSON($listDadosArray);

        }else
        {
        
        if($listDados = exibirProdutos())
            if($listDadosArray = criarArray($listDados))
                $listDadosJSON = criarJSON($listDadosArray);
            } 

        if($listDadosArray)
        {
             return $response    ->withStatus(200)  
                                 ->withHeader('Content-Type', 'application/json')
                                 ->write($listDadosJSON);                                               
        }else
        {
            return $response    ->withStatus(200)  
            ->withHeader('Content-Type', 'application/json')
            ->write('{"message":"não ha dados para essa requisição"}');                                                                   
        }     
    });

    

    // Endpoint: GET, retorna um cliente pelo ID
    $app->get('/produtos/{id}', function($request, $response, $args){
       
        require_once("../crudProdutos/functionsProducts/config.php");
        require_once('../crudProdutos/controlesProducts/exibeDadosProdutos.php');
    
        $id = $args['id'];

        if($listDados = buscarProdutos2($id))
            if($listDadosArray = criarArray($listDados))
                $listDadosJSON = criarJSON($listDadosArray);

        if($listDadosArray)
        {
             return $response    ->withStatus(200)  
                                 ->withHeader('Content-Type', 'application/json')
                                 ->write($listDadosJSON);                                               
        }else
        {
             return $response    ->withStatus(204);
                                                                        
        }                
    });
    // Carrega todos os EndPoint para a execução
    $app->run();
    
?>