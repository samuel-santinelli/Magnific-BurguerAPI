<?php


require_once('../functionsProducts/config.php');

require_once(SRC . 'bdProducts/listarProdutos.php');

$idProdutos = $_GET['id'];

$dadosProdutos = buscarProdutos($idProdutos);

if ($rsProdutos = mysqli_fetch_assoc($dadosProdutos)) {

    session_start();

    $_SESSION['produtos'] = $rsProdutos; 

    header('location:../produtos.php');
} else {
    echo ("
    <script>
        alert('". BD_MSG_ERRO."');
        window.history.back();
        </script>
        ");

    

}

