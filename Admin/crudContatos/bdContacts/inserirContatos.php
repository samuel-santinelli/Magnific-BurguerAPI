<?php

require_once('../bdContacts/conexaoMysql.php');

function inserirContatos ($arrayContatos)
{
    $sql = "insert into tblContatos
        (
            nome,
            celular,
            telefone
        )
        values
        (
            '".$arrayContatos['nome']."',
            '".$arrayContatos['celular']."',
            '".$arrayContatos['telefone']."'

        )
    ";

    
  
    $conexao = conexaoMysql();

    if (mysqli_query($conexao, $sql))
            return true;
        else
            return false;

}




?>