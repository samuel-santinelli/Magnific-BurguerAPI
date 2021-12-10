<?php

require_once(SRC.'bdProducts/conexaoMysql.php');

function listarCategorias()
{
   $sql = "select * from tblCategorias order by tipo";
   
   $conexao = conexaoMysql();

   $select = mysqli_query($conexao, $sql);

   return $select;   
}

?>