<?php

   
    require_once('../functionsUsers/config.php');


    require_once(SRC .'/bdUsers/excluirUsuarios.php');

    $idUsuarios = $_GET['id'];

  
    if(excluirUsuarios($idUsuarios))
        echo(BD_MSG_EXCLUIR);
    else
        echo("
                <script> 
                    alert('". BD_MSG_ERRO ."');
                    window.history.back();
                </script>
        ");
?>