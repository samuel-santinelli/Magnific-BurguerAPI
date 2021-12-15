<?php
    require_once('../functions/config.php');

    require_once(SRC. 'bd/inserirCategorias.php');

    require_once(SRC . 'bd/atualizarCategorias.php');
    require_once(SRC . 'bd/excluirCategorias.php');

    function inserirCategoriaAPI($arrayProdutos)
    {
        if(inserirCategorias($arrayProdutos))
        return true;
        else 
            return false;
    }

    function atualizarCategoriaAPI($arrayDados, $id)
    {
        $novoItem = array("id" => $id);

        $arrayProdutos = $arrayDados + $novoItem;

        if (editarProdutos($arrayProdutos))
        return true;
    else 
        return false;
        
    }


?>
