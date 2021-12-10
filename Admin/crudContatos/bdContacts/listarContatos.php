<?php

require_once(SRC.'bdContacts/conexaoMysql.php');

function listarContatos()
{
    $sql = "select * from tblContatos order by idContatos desc";

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao, $sql);

    return $select;

}

function buscarContatos($idContatos)
{
    $sql = "select * from tblContatos where idContatos =".$idContatos;
    echo($sql);
    
    $conexao = conexaoMysql();

    $select = mysqli_query($conexao, $sql);

    return $select;


}


?>