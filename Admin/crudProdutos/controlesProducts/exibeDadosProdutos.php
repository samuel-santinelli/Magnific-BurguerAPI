<?php

require_once('bdProducts/listarProdutos.php');

function exibirProdutos()
{
    $dadosProdutos = listarProdutos();

    return $dadosProdutos;
}



?>