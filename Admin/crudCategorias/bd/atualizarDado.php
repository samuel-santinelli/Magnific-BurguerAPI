<?php

//Chamando o arquivo que estabelece conexao com o Banco de Dados
require_once('../bd/conexaoMysql.php');

function editarCategorias($arrayCategorias)
{ 
    $sql = "update tblCategorias set
    tipo = '".$arrayCategorias['tipo']."'
    where idCategorias = ".$arrayCategorias['id'];

    $conexao = conexaoMysql1();

    if(mysqli_query($conexao, $sql))
        return true;
    else
        return false;
        
}


?>