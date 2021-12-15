<?php

require_once(SRC.'/bdProducts/listarCategorias.php');

function exibirCategorias()
{
    /*Chama a função que busca os 
    dados no Banco de Dados e recebe os registros dos clientes*/
    $dados = listarCategorias();

    return $dados;
}

?>
