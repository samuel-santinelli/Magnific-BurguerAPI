<?php

require_once(SRC.'bdProducts/conexaoMysql.php');

function listarProdutos()
{
    $sql = "select * from tblProdutos order by idProdutos desc";

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao, $sql);

    return $select;

}

function buscarProdutos($idProdutos)
{
    $sql = "select * from tblProdutos where idProdutos =".$idProdutos;
    echo($sql);
    
    $conexao = conexaoMysql();

    $select = mysqli_query($conexao, $sql);

    return $select;


}

?>