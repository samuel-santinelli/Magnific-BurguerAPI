<?php
require_once("../crudProdutos/functionsProducts/config.php");

require_once(SRC. 'bdProducts/listarProdutos.php');


function exibirProdutos()
{
    $dadosProdutos = listarProdutos();

    return $dadosProdutos;
}

function buscarProdutos2($id)
    {
        $dados = buscar($id);

        return $dados;
    }

// Função para buscar dados do banco de Dados com filtro pelo nome (API)
function buscarNomeProdutos($nome)
{
    $dados = buscarNome($nome);

    return $dados;
}

function criarArray($objeto)
{
    $cont = (int) 0;

    while($rsDados = mysqli_fetch_assoc($objeto))
    {
        $arrayDados[$cont] = array(
        "id"           => $rsDados['idProdutos'],
        "nome"         => $rsDados['nome'],
        "preco"        => $rsDados['preco'],
        "desconto"     => $rsDados['desconto'],
        "descricao"    => $rsDados['descricao'],
        "destaques"    => $rsDados['destaques'],
        "idCategorias" => $rsDados['idCategorias'],
        "imagem"       => $rsDados['imagem']
    );
        $cont+=1;
    }
    if(isset($arrayDados))
        return $arrayDados;
    else
        return false;
}

function criarJSON($arrayDados)
        {

            header("content-type:application/json");

            $listJSON = json_encode($arrayDados);

            if(isset($listJSON))
                return $listJSON;
            else
            return false;
        }

?>