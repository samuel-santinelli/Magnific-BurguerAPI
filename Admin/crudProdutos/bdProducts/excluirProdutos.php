<?php

require_once('../bdProducts/conexaoMysql.php');

function excluirProdutos($idProdutos)
{
    $sql = "delete from tblProdutos
                where idProdutos= ".$idProdutos;

                $conexao = conexaoMysql();

                if (mysqli_query($conexao, $sql))
                    return true;
                else
                    return false;
}

?>