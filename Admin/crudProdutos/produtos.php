<?php
    session_start();

    $nome = (string) null;
    $preco = (int) 0;
    $desconto = (string) null;
    $descricao = (string) null;
    $destaques = (int) 0;
    $imagem = (string) "sem-foto.png";
    $id = (int) 0;
    $idCategorias = (int) null;
    $tipo = (string) "Selecione um item";
    $modo = (string) "Salvar";

    require_once('../crudProdutos/functionsProducts/config.php');
    require_once('../crudCategorias/controles/listarDadosCategorias.php');

    require_once(SRC . '/controlesProducts/exibeDadosProdutos.php');

    if(isset($_SESSION['produtos']))
{
    $id = $_SESSION['produtos']['idProdutos'];
    $nome = $_SESSION['produtos']['nome'];
    $preco = $_SESSION['produtos']['preco'];
    $desconto = $_SESSION['produtos']['desconto'];
    $descricao = $_SESSION['produtos']['descricao'];
    $destaques = $_SESSION['produtos']['destaques'];
    $imagem = $_SESSION['produtos']['imagem'];
    $tipo =  $_SESSION['produtos']['tipo'];

    // Aqui recebe o idCategorias
    $idCategorias = $_SESSION['produtos']['idCategorias'];
    
    $modo = "Atualizar";

    unset($_SESSION['produtos']);
    
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/produtos.css">
    <title>Tela de Produtos</title>
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

    <!-- Conteudo principal -->
    <main>
        <div id="conteudo">
            <!-- Conteudo do titulo -->
                    <div id="conteudo-titulo">
                            <h4>Consulta de Produtos</h4>
                    </div>

                    <!-- Conteudo do main -->
                    <div id="conteudo-main">

    <div id="inserirCategorias">

       <form enctype="multipart/form-data" action="controlesProducts/recebeDadosProdutos.php?modo=<?=$modo?>&id=<?=$id?>&nomeImagem=<?=$imagem?>" name="frmProdutos" method="post">
           <div id="campos">

           <!-- Input do Nome -->
            <div class="cadastroCategorias">
               <label>Nome</label>
           </div>
           <div class="cadastroInserirDados">
               <input type="text" name="txtNome" value="<?=$nome?>" placeholder="Digite o nome de um produto" maxlength="45">
           </div>

           <!-- Input da Imagem -->
           <div class="cadastroCategorias">
            <label>Imagem</label>
        </div>

        <div class="cadastroInserirDados">
            <input type="file" name="fleImagem" accept="image/jpeg, image/jpg, image/png">
        </div>
        <div id="visualizarImagens">
                            <img class="imagem-pic" src="<?=NOME_DIRETORIO_FILE.$imagem?>">
                            </div>                 
                   
        <!-- Input do Preco -->
        <div class="cadastroCategorias">
            <label>Preço</label>
        </div>

        <div class="cadastroInserirDados">
            <input id="input-preco" type="number" name="txtPreco" value="<?=$preco?>" placeholder="Digite um preço" maxlength="15">
        </div>
        
        <!-- Input de Desconto -->
        <div class="cadastroCategorias">
            <label>Desconto</label>
        </div>

        <div class="cadastroInserirDados">
            <input id="input-desconto" type="number" name="txtDesconto" value="<?=$desconto?>" placeholder="Digite o desconto" maxlength="10">
        </div>

        <!-- Input do Destaques -->
        <div class="cadastroCategorias">
            <label>Destaques</label>
        </div>

        <div class="cadastroInserirDados">
            <input id="input-destaques" type="checkbox" name="txtDestaques" value="<?=$destaques?>">
        </div>

        <div class="cadastroCategorias">
            <label>Filtro</label>
        </div>
        
        <div class="cadastroInserirDados">
            <!-- Aqui o do select -->
        <select name="sltCategorias" id="select-categorias">
                            <option selected value="<?=$idCategorias?>"><?=$tipo?></option>
                            <?php
                            
                                $dadosCategorias = exibirCategorias();


                                while ($rsCategorias = mysqli_fetch_assoc($dadosCategorias))
                                {
                              ?>
                                      <option value="<?=$rsCategorias['idCategorias']?>"><?=$rsCategorias['tipo']?></option>
                                    <?php
                                }
                              ?>               
            </select>
        </div>

        <!-- Input da descrição -->
        <div class="cadastroCategorias">
            <label>Descrição</label>
        </div>

        
        <div class="cadastroInserirDados">
            <input id="input-descricao" type="text" name="txtDescricao" value="<?=$descricao?>" placeholder="Digite a descrição" maxlength="100">
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
                       <td class="tblColunas destaque"> Preço</td>
                       <td class="tblColunas destaque"> Desconto</td>
                       <td class="tblColunas destaque"> Descrição</td>
                       <td class="tblColunas destaque"> Imagem</td>
                       <td class="tblColunas destaque"> Destaques</td>
                       
                   </tr>
                   <?php
                $dadosProdutos = exibirProdutos();

                while ($rsProdutos = mysqli_fetch_assoc($dadosProdutos)){

                ?>

                       <tr id="tblLinhas">
                           <td class="tblColunas registros"><?= $rsProdutos['nome'] ?></td>
                           <td class="tblColunas registros"><?= $rsProdutos['preco'] ?></td>
                           <td class="tblColunas registros"><?= $rsProdutos['desconto'] ?></td>
                           <td class="tblColunas registros"><?= $rsProdutos['descricao'] ?></td>
                           <td class="tblColunas registros"><?= $rsProdutos['destaques'] ?>
                            <img class="imagem-pic" src="<?=NOME_DIRETORIO_FILE.$rsProdutos['imagem']?>" alt="">
                            </td>
                           <td class="tblColunas registros">
                           <a href="controlesProducts/editaDadosProdutos.php?id=<?=$rsProdutos['idProdutos']?>">
                                   <img id="imagem-pic" src="imagens/edit.png" alt="Editar" title="Editar" class="editar">
                               </a>
       
       
                               <a onclick="return confirm('Tem certeza que deseja excluir?');" href="controlesProducts/excluiDadosProdutos.php?id=<?=$rsProdutos['idProdutos']?>">
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
