<?php

require_once( '../crudCategorias/bd/conexaoMysql.php');

function listarCategorias()
{
   $sql = "select tblProdutos. *, tblCategorias.tipo from tblProdutos inner join tblCategorias on tblCategorias.idCategorias = tblProdutos.idCategorias;";


   $conexao = conexaoMysql1();
   // echo($sql);
   // die;
   
   $select = mysqli_query($conexao, $sql);

   return $select;   
}

?>