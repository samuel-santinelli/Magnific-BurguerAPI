<?php


require_once('../functions/config.php');

require_once(SRC . 'bd/listarDados.php');

$idCategorias = $_GET['id'];

$dadosCategorias = buscarCategorias($idCategorias);

if ($rsCategorias = mysqli_fetch_assoc($dadosCategorias)) {

    session_start();

    $_SESSION['categorias'] = $rsCategorias; 

    header('location:../index.php');
} else {
    echo ("
    <script>
        alert('". BD_MSG_ERRO."');
        window.history.back();
        </script>
        ");

}

