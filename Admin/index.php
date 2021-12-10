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

    <!-- Conteudo principal -->
    <main>
        <div id="conteudo">


                    <!-- Conteudo do main -->
                    <div id="conteudo-main">
                    <div class="cadastroCategorias">

                    <form enctype="multipart/form-data" action="autenticar.php" name="frmCadastro" method="post">
                    <div id="campos">
                    <label>Login</label>
            </div>
            <div class="cadastroInserirDados">
                <input type="text" name="usuario" value="" placeholder="Digite seu nome" maxlength="45">
           </div>

           <!-- Input do Telefone -->
           <div class="cadastroCategorias">
            <label>Senha</label>
        </div>

        <div class="cadastroInserirDados">
            <input type="text" name="senha" value="" placeholder="Digite sua Senha" maxlength="50">
        </div>

        <div class="cadastroInserirDados">
            <input id="button-cadastro" type="submit" name="">
        </div>
        </form>
                    </div>
        </div>
    </main>

    
    <footer> 
        
    </footer>
</body>
</html>