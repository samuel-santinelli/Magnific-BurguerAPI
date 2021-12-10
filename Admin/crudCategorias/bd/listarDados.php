<?php



require_once(SRC.'bd/conexaoMysql.php');

function listarCategorias()
{
    $sql = "select * from tblCategorias order by idCategorias desc";

    $conexao = conexaoMysql1();

    $select = mysqli_query($conexao, $sql);

    return $select;

}

function buscarCategorias($idCategorias)
{
    $sql = "select * from tblCategorias where idCategorias = ".$idCategorias;

    $conexao = conexaoMysql1();

    $select = mysqli_query($conexao, $sql);

    return $select;
}
