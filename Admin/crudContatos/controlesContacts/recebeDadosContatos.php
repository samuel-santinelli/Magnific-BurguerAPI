<?php
    require_once('../functionsContacts/config.php');

    require_once('../bdContacts/inserirContatos.php');
    require_once('../bdContacts/atualizarContatos.php');

    $nome = (string) null;
    $celular = (string) null;
    $telefone = (string) null;

    if(isset($_GET['id']))

        $id = (int) $_GET['id'];
    else
        $id = (int) 0;

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome = $_POST['txtNome'];
        $celular = $_POST['txtCelular'];
        $telefone = $_POST['txtTelefone'];
  
        
        if($nome == null || $celular == null || $telefone == null)
        echo ("<script>
            alert('" . ERRO_CAIXA_VAZIA . "');
            window.history.back();
            </script>");
    
        elseif (strlen($nome) > 100 || strlen($celular) > 100 || strlen($telefone) > 100)
        echo ("<script>
                alert('" . ERRO_MAXLENGHT . "');
                window.history.back();
               </script>");
        else {
            $contatos = array(
                "id"      => $id,
                "nome"    => $nome,
                "celular" => $celular,
                "telefone"   => $telefone

            );


            if (strtoupper($_GET['modo']) == 'SALVAR') {

                if (inserirContatos($contatos))
                echo ("
                <script> 
                    alert('" . BD_MSG_INSERIR . "');
                    window.location.href = '../contatos.php';
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
            if (editarContatos($contatos))
            echo ("
            <script> 
                alert('" . BD_MSG_INSERIR . "');
                window.location.href = '../contatos.php';
            </script>
        ");

        

        else{
            echo ("
            <script> 
                alert('" . BD_MSG_ERRO . "');
                window.history.back();
            </script>
        ");

        }

     }

    }
        
 }

?>