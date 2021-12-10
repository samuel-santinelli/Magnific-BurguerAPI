<?php

//Chamando o arquivo que estabelece a conexão com o Banco de Dados
require_once('../bdUsers/conexaoMysql.php');

function editarUsuarios($arrayUsuarios)
{
    $sql = "update tblUsuarios set
    nome = '".$arrayUsuarios['nome']."',
    usuario = '".$arrayUsuarios['usuario']."',
    senha = '".$arrayUsuarios['senha']."'
    where idUsuarios = ".$arrayUsuarios['id'];

    $conexao = conexaoMysql();

    if(mysqli_query($conexao, $sql))
        return true;
    else
        return false;
    

}




?>