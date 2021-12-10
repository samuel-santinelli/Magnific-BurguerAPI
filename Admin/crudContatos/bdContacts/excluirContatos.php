<?php

require_once('../bdContacts/conexaoMysql.php');

function excluirContatos($idContatos)
{
    $sql = "delete from tblContatos
                where idContatos= ".$idContatos;

                $conexao = conexaoMysql();

                if (mysqli_query($conexao, $sql))
                    return true;
                else
                    return false;
}

?>