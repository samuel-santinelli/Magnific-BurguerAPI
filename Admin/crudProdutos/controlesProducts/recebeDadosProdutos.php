<?php
    require_once('../functionsProducts/config.php');

    require_once('../bdProducts/inserirProdutos.php');
    require_once('../bdProducts/atualizarProdutos.php');
    require_once(SRC . '/functionsProducts/upload.php');

    $nome = (string) null;
    $preco = (int) 0;
    $desconto = (string) null;
    $descricao = (string) null;
    $destaques = (int) 0;
    $imagem = (string) null;
    $idCategorias = (int) null;
    

    if(isset($_GET['id']))
        $id = (int) $_GET['id'];
    else
        $id = (int) 0;

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome = $_POST['txtNome'];
        $preco = $_POST['txtPreco'];
        $desconto = $_POST['txtDesconto'];
        $descricao = $_POST['txtDescricao'];
        $destaques = $_POST['txtDestaques'] ?? 0;

        $nomeImagem = $_GET['nomeImagem'];
        $idCategorias = $_POST['sltCategorias'];
        // $tipo = $_POST['tipo'];

        if (strtoupper($_GET['modo']) == 'ATUALIZAR')
        {
            if($_FILES['fleImagem']['name'] != "")
            {
                
                $imagem = uploadFile($_FILES['fleImagem']);
                
                unlink(SRC.NOME_DIRETORIO_FILE.$nomeImagem);
            }else
            {
                $imagem = $nomeImagem;
            }
        }else 
        {
                $imagem = uploadFile($_FILES['fleImagem']);
            }
        }

        if($nome == null || $preco == null || $desconto == null || $descricao == null)
            echo ("<script>
            alert('" . ERRO_CAIXA_VAZIA . "');
            window.history.back();
            </script>");

        elseif (strlen($nome) > 100 || strlen($imagem) > 100)
        echo ("<script>
            alert('" . ERRO_MAXLENGHT . "');
            window.history.back();
            </script>");
        else {

            $produtos = array(
                "id"           => $id,
                "nome"         => $nome,
                "preco"        => $preco,
                "desconto"     => $desconto,
                "descricao"    => $descricao,
                "destaques"    => $destaques,
                "idCategorias" => $idCategorias,
                "imagem"   => $imagem

            );
        
            if (strtoupper($_GET['modo']) == 'SALVAR') {

                if (inserirProdutos($produtos))
                echo ("
                      <script> 
                      alert('" . BD_MSG_INSERIR . "');
                      window.location.href = '../produtos.php';
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
                if(editarProdutos($produtos))
                echo ("
                <script> 
                    alert('" . BD_MSG_INSERIR . "');
                    window.location.href = '../produtos.php';
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
    

?>