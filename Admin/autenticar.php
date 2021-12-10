<?php
require_once("./crudUsuarios/functionsUsers/config.php");
require_once("./crudUsuarios/bdUsers/conexaoMysql.php");

$usuario = (string) null; //1 passo declarar as variaveis
$senha = (string) null;

$usuario = $_POST['usuario']; // 3 passo recebe os dados via post do from de login
$senha =   $_POST['senha']; //4 passo recebe os dados via post do from de login


if($usuario != "" && $senha != ""){ // 5 passo, fazendo o tratamento 
    $sql = "select * from tblUsuarios where usuario ='".$usuario."' and
    senha='".$senha."'";

 
    $conexao =  conexaoMysql(); //6 passo, chamando a funcao

    $select = mysqli_query($conexao,$sql);//7 passo, verificando se retornou alguma coisa

   if($exibirUsuarios= mysqli_fetch_assoc($select)){//8 passo para criar o array e guarda dentro do $rsUsuario  
    session_start(); // ativa o uso de variavel de sessão

    $_SESSION['statusLogin'] = true;
    $_SESSION['nomeUsuario'] = $exibirUsuarios['usuario'];
      header('location:./crudProdutos/produtos.php'); // permite redirecionar para uma página
    // echo('foi');
    }else{
        echo(LOGIN_MSG_INVALIDO);
    }
}
?>