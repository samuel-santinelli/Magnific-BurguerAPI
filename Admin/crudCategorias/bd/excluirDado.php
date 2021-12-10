<?php

require_once('../bd/conexaoMysql.php');

function excluirCategorias($idCategorias)
{
    $sql = "delete from tblCategorias
                where idCategorias = ".$idCategorias;

                $conexao = conexaoMysql1();

                if (mysqli_query($conexao, $sql))
                    return true;
                else
                    return false;
}

?>