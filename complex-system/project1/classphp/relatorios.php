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
                            <h1>Relatório Específico Atual</h1>
                            <label for="config-select" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs3">
                                <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                                <select name="nome-produto" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="config-select">
                                    <option value="nome do produto" readonly id="evento-opcao">nome do produto</option>
                                </select>
                                <button class="estilo-botao-padrao">pesquisar</button>                                
                            </label>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Preço de Venda: </span>
                                <span class="config-especifico-span2">0,00 R$</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Preço Custo: </span>
                                <span class="config-especifico-span2">0,00 $</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Markup: </span>
                                <span class="config-especifico-span2">0,00 %</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Margem de Lucro: </span>
                                <span class="config-especifico-span2">0,00 %</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Lucro por Unidade: </span>
                                <span class="config-especifico-span2">0,00 R$</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Margem de Contribuição: </span>
                                <span class="config-especifico-span2">0,00 %</span>
                            </div>
                        </div>
                    </div>
                    <div class="config-padrao-relatorios-div">
                        <div>
                            <h1 id="config-relatorio-geral">Relatório Geral</h1>
                            <br> <br> <br>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Produto mais Rentável: </span>
                                <span class="config-especifico-span2">produto</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Total de Produtos: </span>
                                <span class="config-especifico-span2">0</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Despesa Total: </span>
                                <span class="config-especifico-span2">0,00 R$</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Lucro Bruto Total: </span>
                                <span class="config-especifico-span2">0,00 R$</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Preço Total das Vendas: </span>
                                <span class="config-especifico-span2">0,00 R$</span>
                            </div>
                            <div class="config-texto">
                                <span class="config-especifico-span1">Lucro Líquido Total: </span>
                                <span class="config-especifico-span2">0,00 R$</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="config-display-previsao">
                <form class="config-especifico4 config-especifico5" method="post" enctype="multipart/form-data">
                    <div class="config-padrao-relatorios-div config-borda">
                        <div>
                            <h1>Previsão Financeira</h1>
                            <div class="config-texto2">
                                <span class="config-especifico-span3">GMV do Ano: </span>
                                <span class="config-especifico-span4">0,00 R$</span>
                            </div>
                            <div class="config-texto2">
                                <span class="config-especifico-span1">Preço de Venda: </span>
                                <span class="config-especifico-span2">0,00 R$</span>
                            </div>
                            <div class="config-texto2">
                                <span class="config-especifico-span1">Lucro Líquido: </span>
                                <span class="config-especifico-span2">0,00 R$</span>
                            </div>
                            <div class="config-texto2">
                                <span class="config-especifico-span1">Lucro Bruto: </span>
                                <span class="config-especifico-span2">0,00 R$</span>
                            </div>
                            <div class="config-texto2">
                                <span class="config-especifico-span1">%(Lucro Líquido/GMV): </span>
                                <span class="config-especifico-span2">0,00 %</span>
                            </div>
                        </div>
                    </div>
                    <div class="config-padrao-relatorios-div">
                        <div>
                            <h1>Previsão Financeira</h1>
                            <br> <br> <br>
                            <div class="config-texto2">
                                <span class="config-especifico-span3">Custo Total: </span>
                                <span class="config-especifico-span4">0,00 R$</span>
                            </div>
                            <div class="config-texto2">
                                <span class="config-especifico-span1">Impostos Totais: </span>
                                <span class="config-especifico-span2">0,00 R$</span>
                            </div>
                            <div class="config-texto2">
                                <span class="config-especifico-span1">%(Impostos/GMV): </span>
                                <span class="config-especifico-span2">0,00 %</span>
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