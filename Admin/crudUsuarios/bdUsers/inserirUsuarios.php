<?php

require_once('../bdUsers/conexaoMysql.php');

function inserirUsuarios ($arrayUsuarios)
{
    $sql = "insert into tblUsuarios
        (
            nome,
            usuario,
            senha
        )
        values
        (
            '".$arrayUsuarios['nome']."',
            '".$arrayUsuarios['usuario']."',
            '".$arrayUsuarios['senha']."'

        )
    ";

    
  
    $conexao = conexaoMysql();

    if (mysqli_query($conexao, $sql))
            return true;
        else
            return false;

}




?>