<?php
//Ativa a utilização de variaveis de sessão 
//session_status() retorna se a sessão ja foi iniciada
//PHP_SESSION_ACTIVE - VALIDA SE JÁ ESTA NA MEMÓRIA DO STATUS DE ATIVO
if(session_status() != PHP_SESSION_ACTIVE)
session_start();
    if(!isset($_SESSION['statusLogin']) || !$_SESSION['statusLogin']){
        header('location:index.php');
    }
    

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/cadastro.css">
    <title>Tela de Categorias</title>
</head>
<body>
    
<header>
        <div id="menu">
            <div id="titulo-menu">   
                <h1>C M S Magnífico Burguer</h1>
                <h1>Gerenciamento de Conteúdo do Site</h1>
               
            </div> 

            <h5 id="cabecalho">
                Magnífico Burguer
            </h5>
        </div>
    </header>

        <!-- Conteudo do submenu -->
        <div id="submenu">
            <div id="itens-icones">

            <div>
                 <img class="logo-adm" src="imagens/icone-adm.png">
                <h2>Adm. de Produtos</h2>
              
            </div>

                <div>
                <img class="logo-adm" src="imagens/icone-adm-categorias.png">
                <h2>Adm. de Categorias</h2>
            </div>

            <div>
                <img class="logo-adm" src="imagens/icone-contatos.png">
                <h2>Contatos</h2>
            </div>

            <div>
                <img class="logo-adm" src="imagens/icone-users.png">
                <h2>Usúarios</h2>
            </div>

            <div>
                <div id="logout">
                <h3>Bem vindo</h3>
                <img class="logo-adm" src="imagens/icones-logout.png">
                <h2>Logout</h2>
                </div>
            </div>
        </div>    
    </div>  
</div>
   

    <!-- Conteudo principal -->
    <main>
        <div id="conteudo">
            <!-- Conteudo do titulo -->
                    <div id="conteudo-titulo">
                            <h4>Consulta de Autenticação</h4>
                            <h4>Bem-Vindo <?=$_SESSION['nomeUsuario']?> </h4> 
                    </div>

                   
        </div>
    </main>


    <footer> 
        
    </footer>
</body>
</html>