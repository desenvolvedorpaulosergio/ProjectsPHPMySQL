<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classe de relatório: produtos</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"/>
    <link rel="stylesheet" href="../classcss/estilos-padroes.css">
    <link rel="stylesheet" href="../classcss/estilo-relatorio.css">
    <script src="../classjs/configjs.js"></script>
</head>
<body>
    <header class="config-display-header">
        <nav class="config-nav">
            <h1 class="estilo-titulo-padrao2">Relatório</h1>
            <a href="../classphp/produtos.php">produtos</a>
            <a href="../classphp/estoque.php">estoques</a>
            <a href="#">clientes</a>
            <a href="#" class="config-padrao-relatorios">
                <ins>relatórios</ins>
                <ul class="config-padrao-sub-nav" id="elementos">
                    <li>produtos</li>
                    <li>clientes</li>
                </ul>
            </a>
            <a href="#">
                <span class="material-symbols-outlined estilo-icon2" onclick="eventoClick()">settings</span>
            </a>
        </nav>
    </header>
    
    <div class="config-display-block-formulario">
        <div class="config-display-form">
            <div class="config-padrao" id="config-especifico3">
                <button class="estilo-botao-padrao2" onclick="eventoRelatorioPodutos()" id="config-relatorio-produtos">produtos</button>
                <button class="estilo-botao-padrao2" onclick="eventoRelatorioPrevisoes()" id="config-relatorio-previsoes">previsões</button>
            </div>
            <div id="config-display-relatorio">
                <form class="config-especifico4 config-especifico5" method="post" enctype="multipart/form-data">
                    <div class="config-padrao-relatorios-div config-borda">
                        <div>
                        <?php
                            error_reporting(E_PARSE);

                            $resultado = "nome do produto";
                            $resultado1 = 0.00;
                            $resultado2 = 0.00;
                            $resultado3 = 0.00;
                            $resultado4 = 0.00;
                            $resultado5 = 0.00;
                            $resultado6 = 0.00;

                            if(isset($_POST['pesquisar'])){
                                $nome_produto = $_POST['nome-produto'];
                                if($nome_produto == "nome do produto" || $nome_produto == ""){
                                    print "
                                        <script>
                                            window.document.addEventListener('DOMContentLoaded', function(){
                                                window.document.getElementById('config-display-mensagem-erro').style.display = 'block'
                                            })
                                        </script>
                                    ";
                                }else{
                                    $connect = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
                                    
                                    $preco_venda = "SELECT preco_venda FROM produtos WHERE nome = '$nome_produto'";
                                    $execucao_preco_venda = $connect -> query($preco_venda);
                                    $resultado_preco_venda = $execucao_preco_venda -> fetch_assoc();
                                    $resultado1 = $resultado_preco_venda['preco_venda'];

                                    $preco_custo = "SELECT preco_custo FROM produtos WHERE nome = '$nome_produto'";
                                    $execucao_preco_custo = $connect -> query($preco_custo);
                                    $resultado_preco_custo = $execucao_preco_custo -> fetch_assoc();
                                    $resultado2 = $resultado_preco_custo['preco_custo'];

                                    $markup = "SELECT ((preco_venda-preco_custo)/preco_custo) * 100 AS 'markup' FROM produtos WHERE nome = '".$nome_produto."';";
                                    $execucao_markup = $connect -> query($markup);
                                    $resultado_markup = $execucao_markup -> fetch_assoc();
                                    $resultado3 = number_format($resultado_markup['markup'], 2, ',', '.');

                                    $margem_lucro = "SELECT ((preco_venda-preco_custo)/preco_venda) * 100 AS 'margem_lucro' FROM produtos WHERE nome = '".$nome_produto."';";
                                    $execucao_margem_lucro = $connect -> query($margem_lucro);
                                    $resultado_margem_lucro = $execucao_margem_lucro -> fetch_assoc();
                                    $resultado4 = number_format($resultado_margem_lucro['margem_lucro'], 2, ',', '.');

                                    $lucro_bruto = "SELECT preco_venda - preco_custo AS 'lucro_bruto' FROM produtos WHERE nome = '".$nome_produto."';";
                                    $execucao_lucro_bruto = $connect -> query($lucro_bruto);
                                    $resultado_lucro_bruto = $execucao_lucro_bruto -> fetch_assoc();
                                    $resultado5 = number_format($resultado_lucro_bruto['lucro_bruto'], 2, ',', '.');

                                    $margem_contribuicao = "SELECT preco_venda - (preco_venda * (impostos / 100)) AS 'margem_contribuicao' FROM produtos WHERE nome = '".$nome_produto."';";
                                    $execucao_margem_contribuicao = $connect -> query($margem_contribuicao);
                                    $resultado_margem_contribuicao = $execucao_margem_contribuicao -> fetch_assoc();
                                    $resultado6 = number_format($resultado_margem_contribuicao['margem_contribuicao'], 2, ',', '.');

                                    $resultado = $nome_produto;
                                }
                            }
                        ?>
                            <h1>Relatório Específico Atual</h1>
                            <label for="config-select" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs3">
                                <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                                <select name="nome-produto" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="config-select">
                                    <option value="<?=$resultado?>" readonly id="evento-opcao"><?=$resultado?></option>
                                    <?php
                                        $connect = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
                                        $consulta_produtos = "SELECT nome FROM produtos ORDER BY nome ASC";
                                        $execucao = $connect -> query($consulta_produtos);
                                        if($execucao -> num_rows > 0){
                                            while($coluna = $execucao -> fetch_assoc()){
                                                print "
                                                    <option value='".$coluna['nome']."'>".$coluna['nome']."</option>
                                                ";
                                            }
                                        }
                                    ?>
                                </select>
                                <button type="submit" name="pesquisar" class="estilo-botao-padrao">pesquisar</button>                                
                            </label>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Preço de Venda: </span>
                                <span class="config-especifico-span2"><?=$resultado1?> R$</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Preço Custo: </span>
                                <span class="config-especifico-span2"><?=$resultado2?> R$</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Markup: </span>
                                <span class="config-especifico-span2"><?=$resultado3?> %</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Margem de Lucro: </span>
                                <span class="config-especifico-span2"><?=$resultado4?> %</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Lucro por Unidade: </span>
                                <span class="config-especifico-span2"><?=$resultado5?> R$</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Margem de Contribuição: </span>
                                <span class="config-especifico-span2"><?=$resultado6?> R$</span>
                            </div>
                        </div>
                    </div>
                    <div class="config-padrao-relatorios-div">
                        <div>
                            <h1 id="config-relatorio-geral">Relatório Geral Atual</h1>
                            <br> <br> <br>
                            <div class="config-texto">

                                <?php

                                    error_reporting(E_PARSE);

                                    $connect = new mysqli('127.0.0.1:3306','root','','projeto_estoque');

                                    $consulta_produto_rentavel = "SELECT nome FROM produtos ORDER BY (preco_venda-preco_custo) DESC LIMIT 1;";
                                    $execucao = $connect -> query($consulta_produto_rentavel);
                                    $resultado_produto_rentavel = $execucao -> fetch_assoc();

                                    $quantidade_produtos = "SELECT SUM(quantidade) AS 'total' FROM produtos;";
                                    $execucao = $connect -> query($quantidade_produtos);
                                    $resultado_quantidade = $execucao -> fetch_assoc();

                                    $cmv_total = "SELECT SUM((255 - quantidade)*preco_custo) AS gmv_total FROM produtos;";
                                    $execucao = $connect -> query($cmv_total);
                                    $resultado_cmv = $execucao -> fetch_assoc();

                                    $lucro_bruto = "SELECT SUM((preco_venda-preco_custo) * (255 - quantidade)) AS 'lucro_bruto_total' FROM produtos;";
                                    $execucao_lucro_bruto = $connect -> query($lucro_bruto);
                                    $resultado_lucro_bruto = $execucao_lucro_bruto -> fetch_assoc();

                                    $lucro_liquido = "SELECT SUM(((preco_venda-preco_custo) * (255 - quantidade)) * (1 - (impostos/100))) AS 'lucro_liquido' FROM produtos;";
                                    $execucao_lucro_liquido = $connect -> query($lucro_liquido);
                                    $resultado_lucro_liquido = $execucao_lucro_liquido -> fetch_assoc();

                                    $total_vendas = "SELECT SUM(255 - quantidade) as 'total_vendidos' FROM produtos;";
                                    $execucao_total_vendas = $connect -> query($total_vendas);
                                    $resultado_total_vendas = $execucao_total_vendas -> fetch_assoc();
                                ?>

                                <span class="config-especifico-span1">Produto mais Rentável: </span>
                                <span class="config-especifico-span2"><?=$resultado_produto_rentavel['nome']?></span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Total de Produtos Atualmente: </span>
                                <span class="config-especifico-span2"><?=$resultado_quantidade['total']?></span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">CMV Total Atual: </span>
                                <span class="config-especifico-span2"><?=number_format($resultado_cmv['gmv_total'], 2, ',', '.')?> R$</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Lucro Bruto Total: </span>
                                <span class="config-especifico-span2"><?=number_format($resultado_lucro_bruto['lucro_bruto_total'], 2, ',', '.')?> R$</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Lucro Líquido Total: </span>
                                <span class="config-especifico-span2"><?=number_format($resultado_lucro_liquido['lucro_liquido'], 2, ',', '.')?> R$</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Total dos Produtos Vendidos: </span>
                                <span class="config-especifico-span2"><?=$resultado_total_vendas['total_vendidos']?></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="config-display-previsao">
                <form class="config-especifico4 config-especifico5" method="post" enctype="multipart/form-data">
                    <div class="config-padrao-relatorios-div config-borda">
                        <div>
                            <?php
                                $connect = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
                                
                                $consulta_preco_venda = "SELECT SUM((preco_venda) * 255) AS 'previsao_vendas' FROM produtos;";
                                $execucao_preco_venda = $connect -> query($consulta_preco_venda);
                                $resultado_preco_venda = $execucao_preco_venda -> fetch_assoc();

                                $consulta_lucro_liquido_total = "SELECT SUM(((preco_venda-preco_custo) * 255) * (1 - (impostos/100))) AS 'lucro_liquido_total' FROM produtos;";
                                $execucao_lucro_liquido_total = $connect -> query($consulta_lucro_liquido_total);
                                $resultado_lucro_liquido_total = $execucao_lucro_liquido_total -> fetch_assoc();

                                $lucro_bruto_total_previsao = "SELECT SUM((preco_venda-preco_custo) * 255) AS 'lucro_bruto_total_previsao' FROM produtos;";
                                $execucao_lucro_bruto_total_previsao = $connect -> query($lucro_bruto_total_previsao);
                                $resultado_lucro_bruto_total_previsao = $execucao_lucro_bruto_total_previsao -> fetch_assoc();
                            ?>
                            <h1>Previsão Financeira</h1>
                            <br> <br> <br>
                            <div class="config-texto2">
                                <span class="config-especifico-span1">Preço Venda sem Deduções: </span>
                                <span class="config-especifico-span2"><?=number_format($resultado_preco_venda['previsao_vendas'], 2, ',', '.')?> R$</span>
                            </div>
                            <div class="config-texto2">
                                <span class="config-especifico-span1">Lucro Líquido Total: </span>
                                <span class="config-especifico-span2"><?=number_format($resultado_lucro_liquido_total['lucro_liquido_total'], 2, ',', '.')?> R$</span>
                            </div>
                            <div class="config-texto2">
                                <span class="config-especifico-span1">Lucro Bruto: </span>
                                <span class="config-especifico-span2"><?=number_format($resultado_lucro_bruto_total_previsao['lucro_bruto_total_previsao'], 2, ',', '.')?> R$</span>
                            </div>
                            <div class="config-texto2">
                                <span class="config-especifico-span1">%(L. Líquido/L. Bruto): </span>
                                <span class="config-especifico-span2">100 %</span>
                            </div>
                        </div>
                    </div>
                    <div class="config-padrao-relatorios-div">
                        <div>
                            <?php
                                $connect = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
                                
                                $consulta_custo_total = "SELECT SUM((preco_custo * (255 - quantidade)) + (preco_venda * (255 - quantidade) * (impostos / 100))) AS 'despesa_total' FROM produtos;";
                                $execucao_custo_total = $connect -> query($consulta_custo_total);
                                $resultado_custo_total = $execucao_custo_total -> fetch_assoc();

                                $consulta_total_impostos = "SELECT SUM(((preco_venda - preco_custo) * 255) * (impostos/100)) AS 'total_impostos' FROM produtos;";
                                $execucao_total_impostos = $connect -> query($consulta_total_impostos);
                                $resultado_total_impostos = $execucao_total_impostos -> fetch_assoc();

                                $percentual_impostos = ($resultado_total_impostos['total_impostos'] / $resultado_lucro_bruto_total_previsao['lucro_bruto_total_previsao']) * 100

                            ?>
                            <h1>Previsão Financeira</h1>
                            <br> <br> <br>
                            <div class="config-texto2">
                                <span class="config-especifico-span3">Custo Total: </span>
                                <span class="config-especifico-span4"><?=number_format($resultado_custo_total['despesa_total'], 2, ',', '.')?> R$</span>
                            </div>
                            <div class="config-texto2">
                                <span class="config-especifico-span1">Impostos Totais: </span>
                                <span class="config-especifico-span2"><?=number_format($resultado_total_impostos['total_impostos'], 2, ',', '.')?> R$</span>
                            </div>
                            <div class="config-texto2">
                                <span class="config-especifico-span1">%(Impostos/GMV): </span>
                                <span class="config-especifico-span2"><?=number_format($percentual_impostos, 2, ',', '.')?> %</span>
                            </div>
                            <div class="config-texto2">
                                <span class="config-especifico-span1">Relatório: </span>
                                <span class="config-especifico-span2">Situação Financeira Saldável!</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="config-display-mensagem-erro">
        <div class="config-mensagem-erro">
            <div class="mensagem-erro">
                <span class="material-symbols-outlined">warning</span>
                <p class="mensagem config-especifico-mensagem">
                    preencha os dados corretamente!!!
                </p>
                <button class="estilo-botao-padrao" onclick="eventoClose()">OK</button>
            </div>
        </div>
    </div>

    <div id="config-display-perfil">
        <div class="config-elementos-display">
            <div class="elementos1">
                <button class="estilo-botao-padrao" onclick="eventoAtualizarPerfil()">X</button>
                <span>Configurações</span>
            </div>
            <form method="post" enctype="multipart/form-data">
                <?php
                    $con = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
                    $consulta_usuario = "SELECT * FROM usuario ORDER BY id DESC LIMIT 1";
                    $execucao = $con -> query($consulta_usuario);
                    $resultado = $execucao -> fetch_assoc();
                ?>

                <div class="elementos2">
                    <input type="file" name="elemento-file3" id="elemento-file3">
                    <img src="../resources/<?=$resultado['icon_usuario']?>" name="elemento-file3" id="" alt="icon-user" onclick="document.getElementById('elemento-file3').click()">
                    <br>
                        <h1><?=$resultado['nome_usuario']?></h1>
                    <br>
                    <button type="submit" name="enviar-icone-usuario" class="estilo-botao-padrao estilo-botao-padrao7">mudar icone</button>
                    <?php
                        if(isset($_POST['enviar-icone-usuario'])){

                            error_reporting(E_PARSE);

                            if(!empty($_FILES['elemento-file3']['name'])){
                                $con = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
                                $arquivo_user = $_FILES['elemento-file3']['name'];
                                $atualizar_icone = "UPDATE usuario SET icon_usuario = '$arquivo_user' WHERE id = 1";
                                $local_arquivo = "../resources/" . $_FILES['elemento-file3']['name'];
                                if($con -> query($atualizar_icone)){
                                    if(move_uploaded_file($_FILES['elemento-file3']['tmp_name'], $local_arquivo)){
                                        print "
                                            <script>
                                                window.location = '../classphp/estoque.php';
                                            </script>
                                        ";
                                    }
                                }
                            }else{
                                print "
                                    <script>
                                        window.document.addEventListener('DOMContentLoaded', function(){
                                            window.document.getElementById('config-display-mensagem-erro').style.display = 'block'
                                        })
                                    </script>
                                ";
                            }
                        }
                    ?>
                </div>
            </form>
            <form class="config-form2" method="post">
                <br>
                <label for="nome-usuario" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs3">
                    <span class="material-symbols-outlined estilo-icon3">person</span>
                    <input type="text" name="nome-usuario" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="nome-usuario" placeholder="novo usuario" required oninput="eventoNome()">
                </label>
                <label for="senha-usuario" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs3">
                    <span class="material-symbols-outlined estilo-icon3">key</span>
                    <input type="text" name="senha-usuario" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="senha-usuario" placeholder="nova senha" required oninput="eventoSenha()">
                </label>
                <button type="submit" name="atualizar" class="estilo-botao-padrao estilo-botao-padrao7" id='config-atualizar'>atualizar</button>
                <?php
                    if(isset($_POST['atualizar'])){
                        
                        $nome_usuario = $_POST['nome-usuario'];
                        $senha_usuario = $_POST['senha-usuario'];

                        $con = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
                        $atualizar = "UPDATE usuario SET nome_usuario = '$nome_usuario', senha_usuario = '$senha_usuario' WHERE id = 1";

                        if($con -> query($atualizar)){
                            print "
                                <script>
                                    window.location = '../classphp/estoque.php';
                                </script>
                            ";
                        }
                    }
                ?>
            </form>
        </div>
    </div>

    <div id="config-display-mensagem">
        <div class="config-mensagem-erro">
            <div class="mensagem-erro">
                <p class="mensagem config-especifico-mensagem">
                    é necessário estar na tela cheia para usar o sistema!!!
                </p>
            </div>
        </div>
    </div>  
</body>
</html>