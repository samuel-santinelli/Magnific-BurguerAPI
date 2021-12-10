<?php


require_once('../functionsContacts/config.php');

require_once(SRC . 'bdContacts/listarContatos.php');

$idContatos = $_GET['id'];

$dadosContatos = buscarContatos($idContatos);

if ($rsContatos = mysqli_fetch_assoc($dadosContatos)) {

    session_start();

    $_SESSION['contatos'] = $rsContatos; 

    header('location:../contatos.php');
} else {
    echo ("
    <script>
        alert('". BD_MSG_ERRO."');
        window.history.back();
        </script>
        ");

    

}

