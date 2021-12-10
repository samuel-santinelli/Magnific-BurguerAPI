<?php
    session_start();
    $nome = (string) null;
    $usuario = (string) null;
    $senha = (string) null;
    $id = (int) 0;
    $modo = (string) "Salvar";

    require_once('functionsUsers/config.php');
    require_once(SRC . '/controlesUsers/exibeDadosUsuarios.php');
   

    if(isset($_SESSION['usuario']))
{
    $id = $_SESSION['usuario']['idUsuarios'];
    $nome = $_SESSION['usuario']['nome'];
    $usuarios = $_SESSION['usuario']['usuario'];
    $senha = $_SESSION['usuario']['senha'];

    $modo = "Atualizar";

    unset($_SESSION['usuario']);
    
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/login.css">
    <title>Tela de Autenticação</title>
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
            <a href="http://localhost/ds2t20212/samuel/ProjectHamburguer/produtos.php"> <img class="logo-adm" src="imagens/icone-adm.png">
                <h2>Adm. de Produtos</h2>
            </a>
            </div>

                <div>
                <a href="http://localhost/ds2t20212/samuel/ProjectHamburguer/categorias.php">
                <img class="logo-adm" src="imagens/icone-adm-categorias.png">
                <h2>Adm. de Categorias</h2>
                </a>
            </div>

            <div>
            <a href="http://localhost/ds2t20212/samuel/ProjectHamburguer/contatos.php">
                <img class="logo-adm" src="imagens/icone-contatos.png">
                <h2>Contatos</h2>
            </a>
            </div>

            <div>
            <a href="http://localhost/ds2t20212/samuel/ProjectHamburguer/usuarios.php">
                <img class="logo-adm" src="imagens/icone-users.png">
                <h2>Usúarios</h2>
            </a>
            </div>

            <div>
                <div id="logout">
                <h3>Bem vindo</h3>
                <a href="http://localhost/ds2t20212/samuel/ProjectHamburguer/index.php">
                <img class="logo-adm" src="imagens/icones-logout.png">
                <h2>Logout</h2>
                </a>
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
                            <h4>Consulta de Usuários</h4>
                    </div>

                    <!-- Conteudo do main -->
                    <div id="conteudo-main">
  
    <div id="inserirCategorias">

       <form action="controlesUsers/recebeDadosUsuarios.php?modo=<?=$modo?>&id=<?=$id?>" name="frmUsuarios" method="post">
           <div id="campos">

           <!-- Input do Nome -->
            <div class="cadastroCategorias">
               <label>Nome</label>
           </div>
           <div class="cadastroInserirDados">
               <input type="text" name="txtNome" value="<?=$nome?>" placeholder="Digite seu nome" maxlength="45">
           </div>

           <!-- Input do Usúario -->
           <div class="cadastroCategorias">
            <label>Usúario</label>
        </div>

        <div class="cadastroInserirDados">
            <input type="text" name="txtUsuario" value="<?=$usuario?>" placeholder="Digite seu Usúario" maxlength="45">
        </div>

        <!-- Input da Senha -->
        <div class="cadastroCategorias">
            <label>Senha</label>
        </div>

        <div class="cadastroInserirDados">
            <input type="password" name="txtSenha" value="" placeholder="Digite sua Senha" maxlength="45">
        </div>
           
           <div class="enviar">
               <input type="submit" name="btnBuscar" value="<?=$modo?>">
           </div>
           </div>
    
           <div id="consultaDeDados">
               <table id="tblConsulta">
                   <tr>
                       <td id="tblTitulo" colspan="5">
                           <h1> Consulta de Dados</h1>
                       </td>
                   </tr>
                   <tr id="tblLinhas">
                       <td class="tblColunas destaque"> Nome</td>
                       <td class="tblColunas destaque"> Usuario</td>
                       
                   </tr>
                   <?php
                $dadosUsuarios = exibirUsuarios();

                while ($rsUsuarios = mysqli_fetch_assoc($dadosUsuarios)){

                ?>

                       <tr id="tblLinhas">
                           <td class="tblColunas registros"><?= $rsUsuarios['nome'] ?></td>
                           <td class="tblColunas registros"><?= $rsUsuarios['usuario'] ?></td>

                        
                           <td class="tblColunas registros">
                           <a href="controlesUsers/editaDadosUsuarios.php?id=<?=$rsUsuarios['idUsuarios']?>">
                                   <img src="imagens/edit.png" alt="Editar" title="Editar" class="editar">
                               </a>
       
       
                               <a onclick="return confirm('Tem certeza que deseja excluir?');" href="controlesUsers/excluiDadosUsuarios.php?id=<?=$rsUsuarios['idUsuarios']?>">
                                   <img src="imagens/trash.png" alt="Excluir" title="Excluir" class="excluir">
                               </a>
       
                          
                           </td>
                       </tr>
              
                <?php
  }
                ?>

               </table>
           </div>
   </form>
</div>
   <footer> 
       
   </footer>
</body>
</html>