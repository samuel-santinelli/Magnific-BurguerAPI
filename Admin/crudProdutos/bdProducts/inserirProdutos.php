<?php

require_once('../bdProducts/conexaoMysql.php');

function inserirProdutos ($arrayProdutos)
{
    $sql = "insert into tblProdutos
        (
            nome,
            preco,
            desconto,
            descricao,
            destaques,
            imagem,
            idCategorias
        )
        values
        (
            '".$arrayProdutos['nome']."',
            '".$arrayProdutos['preco']."',
            '".$arrayProdutos['desconto']."',
            '".$arrayProdutos['descricao']."',
            ".$arrayProdutos['destaques'].",
            '".$arrayProdutos['imagem']."',
            ".$arrayProdutos['idCategorias']."

        )
    ";
    

    $conexao = conexaoMysql();
    
    // echo($sql);
    //  die;
    if (mysqli_query($conexao, $sql))
            return true;
        else
            return false;

}




?>