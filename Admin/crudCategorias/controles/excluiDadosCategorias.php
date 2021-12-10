<?php

   
    require_once('../functions/config.php');


    require_once(SRC .'/bd/excluirDado.php');

    $idCategorias = $_GET['id'];

  
    if(excluirCategorias($idCategorias))
        echo(BD_MSG_EXCLUIR);
    else
        echo("
                <script> 
                    alert('". BD_MSG_ERRO ."');
                    window.history.back();
                </script>
        ");
?>