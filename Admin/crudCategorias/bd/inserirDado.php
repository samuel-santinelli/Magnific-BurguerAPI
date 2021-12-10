<?php

//Chamando o arquivo conexaoMysql
require_once('../bd/conexaoMysql.php');

function inserirCategorias ($arrayCategorias)
{
    
    $sql = "insert into tblCategorias
                (
                   tipo
                )
                values
                (
                    '".$arrayCategorias['tipo'] ."'
                )
            ";

            echo($sql);

          //Chamando a função que estabelece a conexão com Banco de dados
          $conexao = conexaoMysql1();
        
          // Envia o script SQL para o BD
         if (mysqli_query($conexao, $sql))
            return true; 
        else 
            return false; 
    
    
}


?>