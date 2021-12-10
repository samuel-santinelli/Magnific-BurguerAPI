<?php

require_once('../bdUsers/conexaoMysql.php');

function excluirUsuarios($idUsuarios)
{
    $sql = "delete from tblUsuarios
                where idUsuarios= ".$idUsuarios;

                $conexao = conexaoMysql();

                if (mysqli_query($conexao, $sql))
                    return true;
                else
                    return false;
}

?>