<?php
    require_once('../functionsProducts/config.php');

    require_once(SRC. 'bdProducts/inserirProdutos.php');

    require_once(SRC . 'bdProducts/atualizarProdutos.php');
    require_once(SRC . 'bdProducts/excluirProdutos.php');

    function inserirProdutoAPI($arrayProdutos)
    {
        if(inserirProdutos($arrayProdutos))
        return true;
        else 
            return false;
    }

    function atualizarProdutoAPI($arrayDados, $id)
    {
        $novoItem = array("id" => $id);

        $arrayProdutos = $arrayDados + $novoItem;

        if (editarProdutos($arrayProdutos))
        return true;
    else 
        return false;
        
    }


?>
