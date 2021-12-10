<?php


require_once('../functionsUsers/config.php');

require_once(SRC . 'bdUsers/listarUsuarios.php');

$idUsuarios = $_GET['id'];

$dadosUsuarios = buscarUsuarios($idUsuarios);

if ($rsUsuarios = mysqli_fetch_assoc($dadosUsuarios)) {

    session_start();

    $_SESSION['usuario'] = $rsUsuarios; 

    header('location:../usuarios.php');
} else {
    echo ("
    <script>
        alert('". BD_MSG_ERRO."');
        window.history.back();
        </script>
        ");

}

