<?php
    // Ativa a utilização de variaveis de sessão 
    // session_status() retorna se a sessão já foi iniciada
    // PHP_SESSION_ACTIVE - valida se já está na memória o status de ativo
    if(session_status() != PHP_SESSION_ACTIVE)
    session_start();

    if(isset($_SESSION['statusLogin']) || !$_SESSION['statusLogin']==true)
        // header('location: ../index.php');

        // Para fazer o logout 
        // unset()
        // session destroy

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/style.css">
    <title>Tela de Login</title>
</head>
<body>
    <!-- Conteudo menu -->
    <header>
        <div id="menu">
            <div id="titulo-menu">   
                <h1>C M S Magnífico Burguer</h1>
                <h1>Gerenciamento de Conteúdo do Site</h1>
               
            </div> 

            <h1 id="cabecalho">
                Magnífico Burguer
            </h1>
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
                            <h4>TITULO DA SESSÃO</h4>
                    </div>

                    <!-- Conteudo do main -->
                    <div id="conteudo-main">

                    </div>
        </div>
    </main>

    <!-- Conteudo Rodapé -->
    <footer>
        <span>Copyright &copy; 2021 | Todos os direitos reservados - Política de Privacidade | Desenvolvido por Samuel Santinelli | versão 1.0.0</span>
    </footer>
</body>
</html>