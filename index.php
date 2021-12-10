<?php
    session_start();

    $nome = (string) null;
    $celular = (string) null;
    $telefone = (string) null;
    $id = (int) 0;
    $modo = (string) "Salvar";

    require_once('./Admin/crudContatos/functionsContacts/config.php');
    require_once('./Admin/crudContatos/controlesContacts/exibeDadosContatos.php');
   

    if(isset($_SESSION['contatos']))
{
    $id = $_SESSION['contatos']['idContatos'];
    $nome = $_SESSION['contatos']['nome'];
    $celular = $_SESSION['contatos']['celular'];
    $telefone = $_SESSION['contatos']['telefone'];

    $modo = "Atualizar";

    unset($_SESSION['contatos']);
    
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/style.css">
    <a href='https://br.freepik.com/fotos/alimento'>Alimento foto criado por freepik - br.freepik.com</a>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Project Store</title>
</head>

<body>
    <!-- Parte do cabeçalho-->
    <header>
        <div id="logoCabecalho">
            <h1 id="cabecalho">
                Magnífico Burguer
            </h1>
        </div>

        <div id="menuCabecalho">
            <ul class="navigation">
                <li><a class="page-scroll" href="#secaoEmpresa">A EMPRESA</a></li>
                <li><a class="page-scroll" href="#contato">LOJAS</a></li>
                <li><a class="page-scroll" href="#secaoPromocao">PROMOÇÕES</a></li>
                <li><a class="page-scroll" href="#destaqueLoja">DESTAQUES</a></li>
                <li><a href="#contato">CONTATOS</a></li>
            </ul>
        </div>
        <div id="redesSociais">
            <div class="itemRedessociais">
                <img class="imagens" src="imagens/instagram.png">
            </div>
            <div class="itemRedessociais">
                <img class="imagens" src="imagens/facebook.png">
            </div>
            <div class="itemRedessociais">
                <img class="imagens" src="imagens/twitter.png">
            </div>

        </div>

    </header>

    <div class="banner">
        <!-- <img src="imagens/banner3.jpg" data-aos="fade-left" class="bg"> -->

        <div class="content">
            <h1>
                Magnífico Burguer
            </h1>
            <h2>"O hamburguer mais sofisticado do mundo!"</h2>
        </div>
    </div>

    <div class="conteudo">
        <div id="menu">
            <div id="submenu">
                <div id="ConteudoMenu">

                    <div class="hamburguer">
                        <span id="ham"></span>
                        <span id="ham"></span>
                        <span id="ham"></span>
                    </div>
                </div>
                <ul id="lista">
                    <li class="lista"> MENU <a href=""></a> </li>

                    <li class="lista"> MENU <a href=""></a></li>

                    <li class="lista"> MENU<a href=""></a> </li>

                    <li class="lista"> MENU <a href=""></a></li>

                </ul>
            </div>
            <button class="button" type="submit">Enviar</button>
            <div class="search">

                <input class="pesquisa" type="text" placeholder="Pesquisa">

            </div>
        </div>

        <div class="produtos" data-aos="fade-left">
            <div class="cardproduto">
                <div class="imagemProduto">
                    <img class="imagemProduto" src="imagens/hamburguer1.jpg">
                </div>
                <h1>Combo Rodeio </h1>
                <p>Combo acompanhado por: 2 hamburguers Rodeio, batata frita e acompanhado com Refrigerante</p>

                <button class="buttonSaibaMais" type="submit">Saiba Mais</button>
                <h2>R$23,00</h2>

            </div>
            <div class="cardproduto">
                <div class="imagemProduto">
                    <img class="imagemProduto" src="imagens/hamburguer2.jpg">
                </div>
                <h1>Lanche Rodeio</h1>
                <p>Lanche acompanhado por: 2 hamburgueres, 2 aneis de cebola e queijo parmesão</p>

                <button class="buttonSaibaMais" type="submit">Saiba Mais</button>
                <h2>R$ 15,13</h2>

            </div>

            <div class="cardproduto">
                <div class="imagemProduto">
                    <img class="imagemProduto" src="imagens/hamburguer3.jpg">
                </div>
                <h1>Lanche duplo Bacon</h1>
                <p>Lanche acompanhado por: bacon, 2 hamburgueres acompanhado com queijo parmesão</p>

                <button class="buttonSaibaMais" type="submit">Saiba Mais</button>
                <h2>R$ 17,45</h2>

            </div>
            <div class="cardproduto">
                <div class="imagemProduto">
                    <img class="imagemProduto" src="imagens/hamburguer4.jpg">
                </div>
                <h1>Burguer Chicken</h1>
                <p>Lanche acompanhado por: frango, 2 hamburgueres, cebola e batata frita de bônus</p>

                <button class="buttonSaibaMais" type="submit">Saiba Mais</button>
                <h2>R$ 18,00</h2>

            </div>
            <div class="cardproduto">
                <div class="imagemProduto">
                    <img class="imagemProduto" src="imagens/hamburguer5.jpg">
                </div>
                <h1>Burguer four</h1>
                <p>Lanche acompanhado por: 4 hamburgueres, queijo parmesão, picles e bacon</p>

                <button class="buttonSaibaMais" type="submit">Saiba Mais</button>
                <h2>R$ 21,90</h2>

            </div>
            <div class="cardproduto">
                <div class="imagemProduto">
                    <img class="imagemProduto" src="imagens/hamburguer6.jpg">
                </div>
                <h1>Combo Master Burguer</h1>
                <p>Combo acompanhado por: 1 hamburguer bacon, batata frita e 2 milk-shakes</p>

                <button class="buttonSaibaMais" type="submit">Saiba Mais</button>
                <h2>R$ 25,50</h2>

            </div>
        </div>

        <!-- Seção Empresa -->
        <section id="secaoEmpresa" data-aos="fade-right">
            <div id="conteudoEmpresa">
                <div id="conteudoTitulo">
                    <h3>A Empresa</h3>
                    <h4>A Magnífico Burguer é uma empresa que visa à produção e venda de lanches feitos artesanalmente. Foi concebida pelo seu fundador Samuel Santinelli Mantovani, que há muito tempo já desejava criar um negócio que faria sucesso em sua região.
                    </h4>
                </div>
            </div>
        </section>
        <!-- Seção Promoções -->
        <div id="secaoPromocao">
            <h5>Nossas Promoções</h5>
            <div class="cardproduto">

                <div class="imagemProduto">
                    <img class="imagemProduto" src="imagens/sobremesa1.jpg">
                </div>
                <h1>Sorvete especial do chefe</h1>
                <p>Sorvete acompanhdo por: chocolate, baunilha e granulado(sabor de sua preferência)</p>

                <button class="buttonSaibaMais" type="submit">Saiba Mais</button>
                <h6>R$ 16,00</h6>
                <h2>R$ 13,50</h2>

            </div>

            <div class="cardproduto">
                <div class="imagemProduto">
                    <img class="imagemProduto" src="imagens/hamburguer6.jpg">
                </div>
                <h1>Combo Master Burguer</h1>
                <p>Combo acompanhado por: 1 hamburguer bacon, batata frita e 2 milk-shakes</p>

                <button class="buttonSaibaMais" type="submit">Saiba Mais</button>
                <h6>R$ 30,00</h6>
                <h2>R$ 25,50</h2>

            </div>

            <div class="cardproduto">
                <div class="imagemProduto">
                    <img class="imagemProduto" src="imagens/refrigerante1.jpg">
                </div>
                <h1>Sorvete premium</h1>
                <p>Sorvete acompanhado por: Ovomaltine, chocolate, e recheio(escolha de sua preferência)</p>

                <button class="buttonSaibaMais" type="submit">Saiba Mais</button>
                <h6>R$ 23,00</h6>
                <h2>R$ 16,00</h2>

            </div>
        </div>
        <div id="destaqueLoja" data-aos="fade-right">

            <div id="tituloDestaque">
                <h5>Nossos Destaques</h5>
            </div>

            <div id="espacoImagemDestaque">
                <img class="imagemDestaque" src="imagens/banner2.jpg">

                <img class="imagemDestaque" src="imagens/banner1.jpg">

                <img class="imagemDestaque" src="imagens/imagemHamburguer3.jpg">

                <img class="imagemDestaque" src="imagens/hamburguer9.jpg">
            </div>

        </div>
        
        <div id="contato">
            <div id="parte-contato">
                <h5>Entre em Contato</h5>
                <div class="entre-contato">
                    <form action="controlesContacts/recebeDadosContatos.php?modo=<?=$modo?>&id=<?=$id?>" name="frmContatos" method="post">
                    <input class="entre-contato" name="txtNome" value="<?=$nome?>" type="text" placeholder="Nome">
                    <input class="entre-contato" name="txtTelefone" value="<?=$celular?>" type="text" placeholder="Celular">
                    <input class="entre-contato" name="txtCelular" value="<?=$telefone?>"type="text" placeholder="Telefone">
                    <button class="button" type="submit">Enviar</button>
</form>
                </div>
            </div>

            <div class="nossasLojas">
                <h5>Nossas Lojas</h5>
                <p><img class="imgContato" src="imagens/hamburgueria1.jpg" alt="">
                <h5>Unidade em Jandira</h5>
                <p>Whatsapp (11) 99438-1968
                    R. Marselha, 823 - Jaguaré, São Paulo - SP, CEP 05332-000 – SP/Jandira, Unidade mais próxima da região de Jandira.

                    Opções de serviço: Retirada na porta · Entrega sem contato · Sem refeição no local</p>


                <div class="nossasLojas">
                    <img class=" imgContato" src="imagens/hamburgueria2.jpg" alt="">
                    <h5>Unidade em Barueri</h5>
                    <p>Whatsapp (11) 99438-1968
                        R. Fernando Pessoa, N° 425 - Vila Lucinda, Jandira - SP, CEP-06622-175 – SP/Barueri, Unidade mais próxima da região de Barueri.

                        Opções de serviço: Retirada na porta · Entrega sem contato · Sem refeição no local</p>
                </div>

            </div>

        </div>
        <script src="src/product.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();

        </script>
</body>

</html>
