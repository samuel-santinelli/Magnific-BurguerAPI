<?php
require_once("../crudCategorias/functions/config.php");

require_once('bd/listarDados.php');

function exibirCategorias()
{
    $exibirCategorias = listarCategorias();

    return $exibirCategorias;
}

function buscarCategorias2($id)
    {
        $dados = buscar($id);

        return $dados;
    }

function buscarNomeCategorias($tipo)
{
    $dados = buscarTipo($tipo);

    return $dados;
}

function criarArray($objeto)
{
    $cont = (int) 0;

    while($rsDados = mysqli_fetch_assoc($objeto))
    {
        $arrayDados[$cont] = array(
        "tipo"           => $rsDados['tipo']
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
