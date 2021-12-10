<?php   
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);

error_reporting(E_ALL);

set_error_handler(function($severity, $message, $file, $line){
    throw new ErrorException($message, 0, $severity, $file, $line);

}); 

//Constante para indicar a pasta raiz do servidor + a estrutura 
//de diretório até o meu projeto
define ('SRC', $_SERVER['DOCUMENT_ROOT'].'/ds2t20212/samuel/ProjectHamburgueria2/Admin/crudCategorias/');

//Variaveis e constantes para conexão de Dados MySql
const BD_SERVER = 'localhost';
const BD_USER = 'root';
const BD_PASSWORD = 'bcd127';
const BD_DATABASE = 'dbprojecthamburgueria';


//Mensagens de erro do Sistema
const ERRO_CONEXAO_BD = "Não foi possivel realizar a conexão com o Banco de Dados, entre em contato com o Administrador do sistema.";
const ERRO_CAIXA_VAZIA = "Não foi possivel realizar a operação, pois existem campos obrigatórios a serem preenchidos";
const ERRO_MAXLENGHT = "Não foi possivel realizar a operação, pois a quantidade de caracteres utrapassa o permitido do Banco de Dados";

//Mensagens de aceitação e validação de dados no Banco de Dados

const BD_MSG_INSERIR = "Registro salvo com sucesso no Banco de Dados!";
const BD_MSG_EXCLUIR = "<script>
                            alert('Registro excluido do Banco de Dados com sucesso!'); 
                        window.location.href='../index.php';
                            </script>";
const BD_MSG_ERRO = "ERRO: Não foi possivel manipular os dados no Banco de Dados";

const LOGIN_MSG_INVALIDO = "<script>
                            alert('Usúario ou senha inválidos'); 
                        window.location.back();
                            </script>";