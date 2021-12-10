<?php
    session_start();

    $nome = (string) null;
    $celular = (string) null;
    $telefone = (string) null;
    $id = (int) 0;
    $modo = (string) "Salvar";

    require_once('functionsContacts/config.php');
    require_once(SRC . '/controlesContacts/exibeDadosContatos.php');
   

    if(isset($_SESSION['contatos']))
{
    $id = $_SESSION['contatos']['idContatos'];
    $nome = $_SESSION['contatos']['nome'];
    $celular = $_SESSION['contatos']['celular'];
    $telefone = $_SESSION['contatos']['telefone'];

    $modo = "Atualizar";

    unset($_SESSION['contatos']);
    
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/login.css">
    <title>Autenticação de Contatos</title>
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
                            <h4>Consulta de Contatos</h4>
                    </div>

                    <!-- Conteudo do main -->
                    <div id="conteudo-main">
  
    <div id="inserirCategorias">

       <form action="controlesContacts/recebeDadosContatos.php?modo=<?=$modo?>&id=<?=$id?>" name="frmContatos" method="post">
           <div id="campos">

           <!-- Input do Nome -->
            <div class="cadastroCategorias">
               <label>Nome</label>
           </div>
           <div class="cadastroInserirDados">
               <input type="text" name="txtNome" value="<?=$nome?>" placeholder="Digite seu nome" maxlength="45">
           </div>

           <!-- Input do Telefone -->
           <div class="cadastroCategorias">
            <label>Celular</label>
        </div>

        <div class="cadastroInserirDados">
            <input type="text" name="txtTelefone" value="<?=$celular?>" placeholder="Digite seu Celular" maxlength="50">
        </div>

        <!-- Input da Senha -->
        <div class="cadastroCategorias">
            <label>Telefone</label>
        </div>

        <div class="cadastroInserirDados">
            <input type="text" name="txtCelular" value="<?=$telefone?>" placeholder="Digite seu Telefone" maxlength="50">
        </div>
           
           <div class="enviar">
               <input type="submit" name="btnBuscar" value="<?=$modo?>">
           </div>
           </div>
    
           <div id="consultaDeDados">
               <table id="tblConsulta">
                   <tr>
                       <td id="tblTitulo" colspan="5">
                           <h1> Consulta de Contatos</h1>
                       </td>
                   </tr>
                   <tr id="tblLinhas">
                       <td class="tblColunas destaque"> Nome</td>
                       <td class="tblColunas destaque"> Celular</td>
                       <td class="tblColunas destaque"> Telefone</td>
                   </tr>
                   <?php
                $dadosContatos = exibirContatos();

                while ($rsContatos = mysqli_fetch_assoc($dadosContatos)){

                ?>

                       <tr id="tblLinhas">
                           <td class="tblColunas registros"><?= $rsContatos['nome'] ?></td>
                           <td class="tblColunas registros"><?= $rsContatos['celular'] ?></td>
                           <td class="tblColunas registros"><?= $rsContatos['telefone'] ?></td>
                        
                           <td class="tblColunas registros">
                           <a href="controlesContacts/editaDadosContatos.php?id=<?=$rsContatos['idContatos']?>">
                                   <img src="imagens/edit.png" alt="Editar" title="Editar" class="editar">
                               </a>
       
       
                               <a onclick="return confirm('Tem certeza que deseja excluir?');" href="controlesContacts/excluiDadosContatos.php?id=<?=$rsContatos['idContatos']?>">
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