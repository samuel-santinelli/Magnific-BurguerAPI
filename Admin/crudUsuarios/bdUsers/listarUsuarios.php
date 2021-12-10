<?php

require_once(SRC.'bdUsers/conexaoMysql.php');

function listarUsuarios()
{
    $sql = "select * from tblUsuarios order by idUsuarios desc";

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao, $sql);

    return $select;

}

function buscarUsuarios($idUsuarios)
{
    $sql = "select * from tblUsuarios where idUsuarios =".$idUsuarios;
    echo($sql);
    
    $conexao = conexaoMysql();

    $select = mysqli_query($conexao, $sql);

    return $select;


}


?>