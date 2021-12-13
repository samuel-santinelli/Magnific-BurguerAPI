<?php

require_once( '../crudCategorias/bd/conexaoMysql.php');

function listarCategorias()
{
   $sql = "select * from tblCategorias order by tipo";


   $conexao = conexaoMysql1();
   // echo($sql);
   // die;
   
   $select = mysqli_query($conexao, $sql);

   return $select;   
}

?>