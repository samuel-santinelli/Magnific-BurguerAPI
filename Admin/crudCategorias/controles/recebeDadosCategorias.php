<?php

    require_once('../functions/config.php');
    
    require_once('../bd/inserirDado.php');
    require_once('../bd/atualizarDado.php');

$tipo = (string) null;

if(isset($_GET['id']))

    $id = (int) $_GET['id'];
else
    $id = (int) 0;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $tipo = $_POST['txtTipo'];
    
        if ($tipo == null)
            echo("<script>
            alert('". ERRO_CAIXA_VAZIA. "');
            window.history.back();
            </script>");

        elseif (strlen($tipo) > 45)
            echo ("<script>
                    alert('". ERRO_MAXLENGHT."');
                    window.history.back();
                    </script>");
        else{
            $categorias = array(
                "id" => $id,
                "tipo" => $tipo
            );
             
            if(strtoupper($_GET['modo']) == 'SALVAR'){

                if(inserirCategorias($categorias))
                echo("
                    <script>
                        alert('". BD_MSG_INSERIR."');
                        window.location.href = '../index.php';
                    </script> 
                    ");
                    else
                    echo ("
                    <script> 
                        alert('" . BD_MSG_ERRO . "');
                        window.history.back();
                    </script>
                ");
                }elseif (strtoupper($_GET['modo']) == 'ATUALIZAR')
                {
                    if (editarCategorias($categorias))
                    echo("
                    <script>
                        alert('". BD_MSG_INSERIR ."';
                        window.location.href = '../index.php';
                    </script>
                    ");
                    else
                        echo("
                        <script>
                            alert('". BD_MSG_ERRO."');
                            window.history.back();
                        </script>
                    ");
             }
        }
    }
?> 