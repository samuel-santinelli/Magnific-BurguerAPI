<?php

//Chamando o arquivo que estabelece a conexão com o Banco de Dados
require_once('../bdContacts/conexaoMysql.php');

function editarContatos($arrayContatos)
{
    $sql = "update tblContatos set
    nome = '".$arrayContatos['nome']."',
    celular = '".$arrayContatos['celular']."',
    telefone = '".$arrayContatos['telefone']."'
    where idContatos = ".$arrayContatos['id'];

    $conexao = conexaoMysql();

    if(mysqli_query($conexao, $sql))
        return true;
    else
        return false;
    

}




?>