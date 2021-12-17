<?php

session_start();

$id = (int) 0;
$tipo = (string) null;
$modo = (string) "Salvar";


require_once('functions/config.php');
require_once('controles/exibeDadosCategorias.php');

if (isset($_SESSION['categorias']))
{   
    $id = $_SESSION['categorias']['idCategorias'];
    $tipo = $_SESSION['categorias']['tipo'];
    $modo = "Atualizar";

    unset($_SESSION['categorias']);
}
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/categorias.css">
    <title>Tela de Categorias</title>
</head>
<body>
    
<?php

require_once('../dashboard.php');

?>
   

    <!-- Conteudo principal -->
    <main>
        <div id="conteudo">
            <!-- Conteudo do titulo -->
                    <div id="conteudo-titulo">
                            <h4>Consulta de Categorias</h4>
                    </div>

                    <!-- Conteudo do main -->
                    <div id="conteudo-main">
                    <div id="inserirCategorias">

<form action="controles/recebeDadosCategorias.php?modo=<?=$modo?>&id=<?=$id?>" name="frmCategorias" method="post">
    <div id="campos">
        <div class="cadastroCategorias">
        <label>Digite uma categoria</label>
    </div>
    <div class="cadastroInserirDados">
        <input type="text" name="txtTipo" value="<?=$tipo?>" placeholder="Digite o nome do hamburguer" maxlength="45">
    </div>
    <div class="enviar">
        <input type="submit" name="btnBuscar" value="<?=$modo?>">
    </div>
    </div>

    <div id="consultaDeDados">
        <table id="tblConsulta">
            <tr>
                <td id="tblTitulo" colspan="5">
                    <h1> Consulta de Categorias</h1>
                </td>
            </tr>
            <tr id="tblLinhas">
                <td class="tblColunas destaque"> Nome da Categoria</td>
            </tr>
   <?php
    $dadosCategorias = exibirCategorias();

    while ($rsCategorias = mysqli_fetch_assoc($dadosCategorias)){


    ?>
                <tr id="tblLinhas">
                    <td class="tblColunas registros"><?= $rsCategorias['tipo'] ?></td>
                 
                    <td class="tblColunas registros">
                    <a href="controles/editaDadosCategorias.php?id=<?=$rsCategorias['idCategorias']?>">
                            <img src="imagens/edit.png" alt="Editar" title="Editar" class="editar">
                        </a>


                        <a onclick="return confirm('Tem certeza que deseja excluir?');" href="controles/excluiDadosCategorias.php?id=<?=$rsCategorias['idCategorias']?>">
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
                    </div>
        </div>
    </main>

    
    <footer> 
        
    </footer>
</body>
</html>