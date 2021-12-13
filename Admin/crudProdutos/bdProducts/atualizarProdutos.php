<?php

//Chamando o arquivo que estabelece a conexão com o Banco de Dados
require_once('../bdProducts/conexaoMysql.php');

function editarProdutos($arrayProdutos)
{
    $sql = "update tblProdutos set
    nome = '".$arrayProdutos['nome']."',
    preco = '".$arrayProdutos['preco']."',
    desconto = '".$arrayProdutos['desconto']."',
    descricao = '".$arrayProdutos['descricao']."',
    imagem = '".$arrayProdutos['imagem']."',
    destaques = ".$arrayProdutos['destaques'].",
    idCategorias = ".$arrayProdutos['idCategorias']."
    where idProdutos = ".$arrayProdutos['id'];

    $conexao = conexaoMysql();

    if(mysqli_query($conexao, $sql))
        return true;
    else
        return false;
    

}




?>