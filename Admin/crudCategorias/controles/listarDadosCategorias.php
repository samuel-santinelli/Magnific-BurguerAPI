<?php
require_once('../crudCategorias/bd/listarCategorias.php');

function exibirCategorias()
{
    
    $dados = listarCategorias();

    return $dados;
}

?>
