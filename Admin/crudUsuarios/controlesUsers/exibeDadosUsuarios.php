<?php

require_once('bdUsers/listarUsuarios.php');

function exibirUsuarios()
{
    $dadosUsuarios = listarUsuarios();

    return $dadosUsuarios;
}



?>