<?php

require_once(SRC. 'bdContacts/listarContatos.php');



function exibirContatos()
{
    $dadosContatos= listarContatos();

    return $dadosContatos;
}



?>