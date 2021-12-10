<?php

   
    require_once('../functionsProducts/config.php');


    require_once(SRC .'/bdProducts/excluirProdutos.php');

    $idProdutos = $_GET['id'];

   $nomeImagem = $_GET['imagem'];

    if(excluirProdutos($idProdutos))
    {
        unlink(SRC.NOME_DIRETORIO_FILE.$nomeImagem);
        echo(BD_MSG_EXCLUIR);
    }
      
    else
        echo("
                <script> 
                    alert('". BD_MSG_ERRO ."');
                    window.history.back();
                </script>
        ");
?>