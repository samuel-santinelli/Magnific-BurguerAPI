<?php
    require_once('../functionsUsers/config.php');

    require_once('../bdUsers/inserirUsuarios.php');
    require_once('../bdUsers/atualizarUsuarios.php');

    $nome = (string) null;
    $usuario = (string) null;
    $senha = (string) null;

    if(isset($_GET['id']))

        $id = (int) $_GET['id'];
    else
        $id = (int) 0;

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome = $_POST['txtNome'];
        $usuario = $_POST['txtUsuario'];
        $senha = $_POST['txtSenha'];
        
        
        if($nome == null || $usuario == null || $senha == null)
        echo ("<script>
            alert('" . ERRO_CAIXA_VAZIA . "');
            window.history.back();
            </script>");
    
        elseif (strlen($nome) > 100 || strlen($usuario) > 100 || strlen($senha) > 100)
        echo ("<script>
                alert('" . ERRO_MAXLENGHT . "');
                window.history.back();
               </script>");
        else {
            $usuario = array(
                "id"      => $id,
                "nome"    => $nome,
                "usuario" => $usuario,
                "senha"   => $senha

            );

            if (strtoupper($_GET['modo']) == 'SALVAR') {

                if (inserirUsuarios($usuario))
                echo ("
                <script> 
                    alert('" . BD_MSG_INSERIR . "');
                    window.location.href = '../usuarios.php';
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
            if (editarUsuarios($usuario))
            echo ("
            <script> 
                alert('" . BD_MSG_INSERIR . "');
                window.location.href = '../usuarios.php';
            </script>
        ");
        else
            echo ("
            <script> 
                alert('" . BD_MSG_ERRO . "');
                window.history.back();
            </script>
        ");
        
     }

    }
        
 } 
?>