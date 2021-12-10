<?php

   
    require_once('../functionsContacts/config.php');


    require_once(SRC .'/bdContacts/excluirContatos.php');

    $idContatos = $_GET['id'];

  
    if(excluirContatos($idContatos))
        echo(BD_MSG_EXCLUIR);
    else
        echo("
                <script> 
                    alert('". BD_MSG_ERRO ."');
                    window.history.back();
                </script>
        ");
?>