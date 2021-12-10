<?php

require_once('bd/listarDados.php');

function exibirCategorias()
{
    $exibirCategorias = listarCategorias();

    return $exibirCategorias;
}



?>
