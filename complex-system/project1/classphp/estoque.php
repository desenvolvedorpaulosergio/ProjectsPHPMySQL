<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classe de estoque</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"/>
    <link rel="stylesheet" href="../classcss/estilos-padroes.css">
    <link rel="stylesheet" href="../classcss/estilo-produtos.css">
    <script src="../classjs/configjs.js"></script>
</head>
<body>
    <header class="config-display-header">
        <nav class="config-nav">
            <h1 class="estilo-titulo-padrao2">Estoques</h1>
            <a href="#">produtos</a>
            <a href="#"><ins>estoques</ins></a>
            <a href="#">clientes</a>
            <a href="#">relatórios</a>
            <a href="#">
                <span class="material-symbols-outlined estilo-icon2" onclick="eventoClick()">settings</span>
            </a>
        </nav>
    </header>

    <div class="config-display-block-formulario">
        <div class="config-display-form">
            <div class="config-padrao" id="config-especifico3">
                <button class="estilo-botao-padrao2" onclick="eventoJanelaCadastro()" id="estilo-underline-cadastrar">cadastrar</button>
                <button class="estilo-botao-padrao2" onclick="eventoJanelaExcluir()" id="estilo-underline-excluir">excluir</button>
                <button class="estilo-botao-padrao2" onclick="eventoJanelaAlterar()" id="estilo-underline-alterar">alterar</button>
            </div>
            <div id="config-display-cadastro">
                <form class="config-especifico4" method="post" enctype="multipart/form-data">
                    <div class="config-form-padrao estilo-form-especifico1">
                        <div class="comprimento-padrao-forms">
                            <label for="nome-produto" class="estilo-padrao-inputs estilo-padrao-inputs2">
                                <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                                <input type="text" name="nome-produto" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="nome-produto" placeholder="nome do produto..." required oninput="eventoCaractere()">
                            </label>
                            <div class="config-display-form-inline">
                                <label for="quantidade-produto" class="estilo-padrao-inputs estilo-padrao-inputs2">
                                    <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                                    <input type="number" name="quantidade-produto" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="quantidade-produto" placeholder="quantidade" required step="1" oninput="eventoQuantidade()">
                                </label>

                                <label for="categoria-produto" class="estilo-padrao-inputs estilo-padrao-inputs2">
                                    <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                                    <input type="text" name="categoria-produto" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="categoria-produto" placeholder="categoria" required list="categorias-produtos" oninput="eventoCaractere2()">
                                    <datalist id="categorias-produtos">
                                        <option value="Bebidas">bebidas</option>
                                        <option value="Roupas">roupas</option>
                                        <option value="Eletrônicos">eletrônicos</option>
                                        <option value="Alimentos">alimentos</option>
                                        <option value="Cosméticos">cosméticos</option>
                                        <option value="Móveis">móveis</option>
                                        <option value="Brinquedos">brinquedos</option>
                                        <option value="Livros">livros</option>
                                        <option value="Ferramentas">ferramentas</option>
                                        <option value="Artigos Esportivos">artigos esportivos</option>
                                    </datalist>
                                </label>
                            </div>

                            <div class="config-display-form-inline">
                                <label for="preco-custo" class="estilo-padrao-inputs estilo-padrao-inputs2">
                                    <span class="material-symbols-outlined estilo-icon3">paid</span>
                                    <input type="number" name="preco-custo" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="preco-custo" placeholder="preço custo" required step="0.05" oninput="eventoPreco()">
                                </label>
                                
                                <label for="preco-venda" class="estilo-padrao-inputs estilo-padrao-inputs2">
                                    <span class="material-symbols-outlined estilo-icon3">paid</span>
                                    <input type="number" name="preco-venda" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="preco-venda" placeholder="preço venda" required step="0.05" oninput="eventoPreco()">
                                </label>
                            </div>

                            <label for="validade-produto" class="estilo-padrao-inputs estilo-padrao-inputs2">
                                <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                                <input type="text" name="validade-produto" id="validade-produto" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" placeholder="validade/garantia: dd/mm/aaaa" required oninput="eventoRegEx()">
                            </label>
                        </div>
                        <div class="comprimento-padrao-forms">
                            <input type="file" name="img-produto" id="img-produto" accept=".jpg, .jpeg, .png">
                            <div class="estilo-botao-padrao estilo-botao-padrao4" onclick="eventoCamera()">
                                <span class="material-symbols-outlined">photo_camera</span>
                            </div>
                            <label for="taxa" class="estilo-padrao-inputs estilo-padrao-inputs2">
                                <span class="material-symbols-outlined estilo-icon3">paid</span>
                                <input type="number" name="taxa" id="taxa" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" placeholder="imposto: ex. 24,45%" required value="" step="0.05" oninput="eventoTaxa()">
                            </label>
                            <label for="obs-produto" class="estilo-padrao-inputs estilo-padrao-inputs2">
                                <span class="material-symbols-outlined estilo-icon3">warning</span>
                                <input type="text" name="obs-produto" id="obs-produto" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="obs-produto" placeholder="observação" required readonly value="">
                            </label>
                        </div>
                    </div>
                    <div class="config-form-padrao estilo-form-especifico2">
                        <div class="estilo-botao-padrao3 config-display-elementos1" onclick="eventoVerificar()">verificar</div>
                        <div class="estilo-botao-padrao3 config-display-elementos1" onclick="eventoVisualizar()">visualizar</div>

                        <button type="submit" name="cadastrar-produto" class="estilo-botao-padrao3 config-display-elementos2" onclick="eventoCadastrar()">cadastrar</button>
                        <div class="estilo-botao-padrao3 config-display-elementos2" onclick="eventoCancelar()">cancelar</div>
                        <div class="estilo-botao-padrao3 config-display-elementos2" onclick="eventoVisualizar()">visualizar</div>
                    </div>
                    <?php
                        if(isset($_POST['cadastrar-produto'])){
                            $nome = $_POST['nome-produto'];
                            $quantidade = $_POST['quantidade-produto'];
                            $categoria = $_POST['categoria-produto'];
                            $custo = $_POST['preco-custo'];
                            $venda = $_POST['preco-venda'];
                            $validade = $_POST['validade-produto'];
                            $taxa = $_POST['taxa'];
                            $obs = $_POST['obs-produto'];

                            $icon = $_FILES['img-produto']['name'];
                            $local_arquivo = "../resources/" . $_FILES['img-produto']['name'];

                            if($icon != ""){
                                $con = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
                                $inserir = "INSERT INTO produtos VALUES(DEFAULT, '$nome', $quantidade, '$categoria', $custo, $venda, '$validade', $taxa, '$obs', '$icon')";
                                if($con -> query($inserir)){
                                    if(move_uploaded_file($_FILES['img-produto']['tmp_name'], $local_arquivo)){
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
                </form>
            </div>

            <div id="config-display-excluir">
                <form class="config-especifico4 config-especifico5" method="post" enctype="multipart/form-data">
                    <div class="config-display-excluir">
                        <label for="cod-produto" class="estilo-padrao-inputs">
                            <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                            <input type="number" name="cod-produto" id="cod-produto" class="estilo-input-padrao estilo-input-padrao2 estilo-input-padrao3 config-readonly-padrao" id="obs-produto" placeholder="código do produto..." required oninput="eventoErro2()">
                        </label>
                        <button type="submit" name="excluir" class="estilo-botao-padrao comprimento-botao">excluir</button>
                        <div class="estilo-botao-padrao comprimento-botao" onclick="eventoVisualizar()">visualizar</div>
                    </div>

                    <div class="condig-tamanho-tabela">
                        <table class="estilo-padrao-tabela">
                            <tr>
                                <th class="comprimento-padrao-campo">cod</th>
                                <th>nome</th>
                                <th>quantidade</th>
                                <th>categoria</th>
                                <th>preço custo</th>
                                <th>preço venda</th>
                                <th>validade</th>
                                <th>imposto</th>
                                <th>observação</th>
                                <th>img</th>
                            </tr>
                            <?php
                                $con = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
                                $consulta = "SELECT * FROM produtos";
                                $execucao = $con -> query($consulta);
                                    if($execucao -> num_rows > 0){
                                        while($coluna = $execucao -> fetch_assoc()){
                                            print "
                                                <tr>
                                                    <td title='".$coluna['cod']."'>".$coluna['cod']."</td>
                                                    <td title='".$coluna['nome']."'>".$coluna['nome']."</td>
                                                    <td title='".$coluna['quantidade']."'>".$coluna['quantidade']."</td>
                                                    <td title='".$coluna['categoria']."'>".$coluna['categoria']."</td>
                                                    <td title='".$coluna['preco_custo']."'>".$coluna['preco_custo']." R$</td>
                                                    <td title='".$coluna['preco_venda']."'>".$coluna['preco_venda']." R$</td>
                                                    <td title='".$coluna['validade']."'>".$coluna['validade']."</td>
                                                    <td title='".$coluna['impostos']."%'>".$coluna['impostos']."%</td>
                                                    <td title='".$coluna['observacao']."'>".$coluna['observacao']."</td>
                                                    <td title='".$coluna['icon_img']."'>".$coluna['icon_img']."</td>
                                                </tr>
                                            ";
                                        }
                                    }
                                ?>
                        </table>
                    </div>
                    <?php
                        if(isset($_POST['excluir'])){

                            error_reporting(E_PARSE);

                            $cod_produto =  $_POST['cod-produto'];

                            $con = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
                            $excluir = "DELETE FROM produtos WHERE cod = $cod_produto";

                            $consulta_cod = "SELECT cod AS 'codigo_existente' FROM produtos WHERE cod = $cod_produto;";
                            $execucao_cod = $con -> query($consulta_cod);
                            $resultado_cod = $execucao_cod -> fetch_assoc();

                            if($cod_produto != $resultado_cod['codigo_existente']){
                                print "
                                    <script>
                                        window.document.addEventListener('DOMContentLoaded', function(){
                                            window.document.getElementById('config-display-mensagem-erro').style.display = 'block'
                                            window.document.getElementById('config-display-cadastro').style.display = 'none'
                                            window.document.getElementById('config-display-excluir').style.display = 'block'
                                            window.document.getElementById('config-display-alterar').style.display = 'none'
                                            window.document.getElementById('estilo-underline-cadastrar').style.textDecoration = 'none'
                                            window.document.getElementById('estilo-underline-excluir').style.textDecoration = 'underline'
                                            window.document.getElementById('estilo-underline-alterar').style.textDecoration = 'none'
                                        })
                                    </script>
                                ";
                            }else{
                                if($con -> query($excluir)){
                                    print "
                                        <script>
                                            window.location = '../classphp/estoque.php';
                                        </script>
                                    ";
                                }
                            }
                        }
                    ?>
                </form>
            </div>

            <div id="config-display-alterar">
                <form class="config-especifico4 config-especifico5" method="post" enctype="multipart/form-data">
                    <div class="config-display-excluir">
                        <?php
                        $cod_produto = "";
                        if(isset($_POST['procurar'])){
                            error_reporting(E_PARSE);
                            $cod_produto3 = $_POST['cod-produto3'];

                            $con = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
                            $consulta_cod = "SELECT cod FROM produtos WHERE cod = $cod_produto3";
                            $execucao_cod = $con -> query($consulta_cod);
                            $resultado_cod = $execucao_cod -> fetch_assoc();

                            $cod_produto = $resultado_cod['cod'];
                        }
                        ?>
                        <label for="cod-produto3" class="estilo-padrao-inputs">
                            <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                            <input type="number" name="cod-produto3" id="cod-produto3" class="estilo-input-padrao estilo-input-padrao2 estilo-input-padrao3 config-readonly-padrao" placeholder="código do produto..." required oninput="eventoErro()" value="<?=$cod_produto?>">
                        </label>
                        <button name="procurar" class="estilo-botao-padrao comprimento-botao" onclick="eventoProcurar()">procurar</button>
                        <button type="submit" class="estilo-botao-padrao comprimento-botao" name="alterar-produto" id="alterar-produto">alterar</button>
                        <div class="estilo-botao-padrao comprimento-botao" onclick="eventoVisualizar()">visualizar</div>
                    </div>

                    <div class="condig-tamanho-tabela condig-tamanho-tabela2">
                        <table class="estilo-padrao-tabela">
                            <tr>
                                <th class="comprimento-padrao-campo">cod</th>
                                <th>nome</th>
                                <th>quantidade</th>
                                <th>categoria</th>
                                <th>preço custo</th>
                                <th>preço venda</th>
                                <th>validade</th>
                                <th>imposto</th>
                                <th>observação</th>
                                <th>img</th>
                            </tr>
                            <?php
                                $con = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
                                $consulta = "SELECT * FROM produtos";
                                $execucao = $con -> query($consulta);
                                    if($execucao -> num_rows > 0){
                                        while($coluna = $execucao -> fetch_assoc()){
                                            print "
                                                <tr>
                                                    <td title='".$coluna['cod']."'>".$coluna['cod']."</td>
                                                    <td title='".$coluna['nome']."'>".$coluna['nome']."</td>
                                                    <td title='".$coluna['quantidade']."'>".$coluna['quantidade']."</td>
                                                    <td title='".$coluna['categoria']."'>".$coluna['categoria']."</td>
                                                    <td title='".$coluna['preco_custo']."'>".$coluna['preco_custo']." R$</td>
                                                    <td title='".$coluna['preco_venda']."'>".$coluna['preco_venda']." R$</td>
                                                    <td title='".$coluna['validade']."'>".$coluna['validade']."</td>
                                                    <td title='".$coluna['impostos']."%'>".$coluna['impostos']."%</td>
                                                    <td title='".$coluna['observacao']."'>".$coluna['observacao']."</td>
                                                    <td title='".$coluna['icon_img']."'>".$coluna['icon_img']."</td>
                                                </tr>
                                            ";
                                        }
                                    }
                                ?>
                        </table>
                    </div>
                    
                    <?php
                    
                    // $cod_produto = "";
                    $nome_produto = "";
                    $quantidade_produto = "";
                    $categoria_produto = "";
                    $preco_custo = "";
                    $preco_venda = "";
                    $validade = "";
                    $impostos = "";
                    $observacao = "";
                    $icon_img = "";


                    if(isset($_POST['procurar'])){
                        error_reporting(E_PARSE);
                        $cod_produto3 = $_POST['cod-produto3'];

                        $con = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
                        $consulta_cod = "SELECT cod FROM produtos WHERE cod = $cod_produto3";
                        $execucao_cod = $con -> query($consulta_cod);
                        $resultado_cod = $execucao_cod -> fetch_assoc();

                        if($_POST['cod-produto3'] != $resultado_cod['cod']){
                            print "
                                <script>
                                    window.document.addEventListener('DOMContentLoaded', function(){
                                        window.document.getElementById('config-display-mensagem-erro').style.display = 'block'
                                        document.getElementById('config-atualizar').style.display = 'block';
                                    })
                                    window.document.addEventListener('DOMContentLoaded', function(){
                                        document.querySelectorAll('.config-readonly-padrao3').forEach(function(elementos){
                                        elementos.readOnly = true
                                    })
                                })
                                </script>
                                ";
                            }else{
                            print "
                                <script>
                                    window.document.addEventListener('DOMContentLoaded', function(){
                                        document.getElementById('config-atualizar').style.display = 'block';
                                        document.getElementById('alterar-produto').style.display = 'block';
                                    })
                                    
                                    window.document.addEventListener('DOMContentLoaded', function(){
                                        document.querySelectorAll('.config-readonly-padrao3').forEach(function(elementos){
                                        elementos.readOnly = false
                                    })
                                })
                                </script>
                            ";               
                    
                            $consulta_dados = "SELECT * FROM produtos WHERE cod = $cod_produto3";
                            $execucao_dados = $con -> query($consulta_dados);
                            $resultado_dados = $execucao_dados -> fetch_assoc();
                            
                            // $cod_produto = $resultado_dados['cod'];
                            
                            $nome_produto = $resultado_dados['nome'];
                            $quantidade_produto = $resultado_dados['quantidade'];
                            $categoria_produto = $resultado_dados['categoria'];
                            $preco_custo = $resultado_dados['preco_custo'];
                            $preco_venda = $resultado_dados['preco_venda'];
                            $validade = $resultado_dados['validade'];
                            $impostos = $resultado_dados['impostos'];
                            $observacao = $resultado_dados['observacao'];
                            $icon_img = $resultado_dados['icon_img'];
                        }
                    }
                ?>

                    <div class="config-inline-flex">
                        <label for="nome-produto3" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs3">
                            <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                            <input type="text" name="nome-produto3" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao3" id="nome-produto3" placeholder="nome do produto..." required readonly value="<?=$nome_produto?>">
                        </label>
                        <label for="quantidade-produto3" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs4">
                            <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                            <input type="number" name="quantidade-produto3" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao3" id="quantidade-produto3" placeholder="quantidade" required step="1" oninput="eventoQuantidade2()" readonly value="<?=$quantidade_produto?>">
                        </label>
                        <label for="categoria-produto3" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs4">
                            <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                            <input type="text" name="categoria-produto3" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao3" id="categoria-produto3" placeholder="categoria" required list="categorias-produtos" readonly value="<?=$categoria_produto?>">
                            <datalist id="categorias-produtos">
                                <option value="Bebidas">bebidas</option>
                                <option value="Roupas">roupas</option>
                                <option value="Eletrônicos">eletrônicos</option>
                                <option value="Alimentos">alimentos</option>
                                <option value="Cosméticos">cosméticos</option>
                                <option value="Móveis">móveis</option>
                                <option value="Brinquedos">brinquedos</option>
                                <option value="Livros">livros</option>
                                <option value="Ferramentas">ferramentas</option>
                            </datalist>
                        </label>
                        <label for="preco-custo3" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs4">
                            <span class="material-symbols-outlined estilo-icon3">paid</span>
                            <input type="number" name="preco-custo3" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao3" id="preco-custo3" placeholder="preço custo" required step="0.05" readonly oninput="eventoPreco3()" value="<?=$preco_custo?>">
                        </label>
                    </div>
                    <div class="config-inline-flex">
                        <label for="preco-venda3" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs4" style="width:200px;">
                            <span class="material-symbols-outlined estilo-icon3">paid</span>
                            <input type="number" name="preco-venda3" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao3" id="preco-venda3" placeholder="preço venda" required step="0.05" readonly oninput="eventoPreco3()" value="<?=$preco_venda?>">
                        </label>
                        <input type="file" name="img-produto3" id="img-produto3" accept=".jpg, .jpeg, .png" value="<?=$icon_img?>">
                        <label for="validade-produto3" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs3" style="width:235px;">
                            <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                            <input type="text" name="validade-produto3" id="validade-produto3" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao3" placeholder="validade/garantia" required readonly oninput="eventoRegEx2()" value="<?=$validade?>">
                        </label>
                        <label for="imposto3" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs4" style="width: 180px">
                            <span class="material-symbols-outlined estilo-icon3">paid</span>
                            <input type="number" name="imposto3" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao3" id="imposto3" placeholder="imposto" required step="0.05" oninput="eventoImposto()" readonly value="<?=$impostos?>">
                        </label>
                        <label for="observacao3" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs3">
                            <span class="material-symbols-outlined estilo-icon3">warning</span>
                            <input type="text" name="observacao3" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao3" id="observacao3" placeholder="observação..." required readonly value="<?=$observacao?>">
                        </label>
                        <div class="estilo-botao-padrao estilo-botao-padrao7" onclick="document.getElementById('img-produto3').click()">
                            <span class="material-symbols-outlined estilo-icon3">photo_camera</span>
                        </div>
                    </div>

                    <?php
                        if(isset($_POST['alterar-produto'])){

                            $cod = $_POST['cod-produto3'];

                            $nome = $_POST['nome-produto3'];
                            $quantidade = $_POST['quantidade-produto3'];
                            $categoria = $_POST['categoria-produto3'];
                            $custo = $_POST['preco-custo3'];
                            $venda = $_POST['preco-venda3'];
                            $validade = $_POST['validade-produto3'];
                            $taxa = $_POST['imposto3'];
                            $obs = $_POST['observacao3'];

                            $icon = $_FILES['img-produto3']['name'];

                            // $arquivo = $_POST['img-produto3'];

                            if($nome != "" && $quantidade > 0 && $quantidade <= 255 && $categoria != "" && $custo < $venda && $custo > 0 && $venda > 0 && $validade != "" && $taxa > 0 && $taxa <= 65 && $icon != "" && $obs != ""){
                                if($icon != ""){
                                    $con = new mysqli('127.0.0.1:3306','root','','projeto_estoque');                
                                    $alterar = "UPDATE produtos SET nome = '".$nome."', quantidade = $quantidade, categoria = '".$categoria."', preco_custo = $custo, preco_venda = $venda, validade = '$validade', impostos = $taxa, observacao = '$obs', icon_img = '".$icon."' WHERE cod = $cod";
        
                                    $local_arquivo = "../resources/" . $_FILES['img-produto3']['name'];
        
                                    if($con -> query($alterar)){
                                        if(move_uploaded_file($_FILES['img-produto3']['tmp_name'], $local_arquivo)){
                                            header("Location: ../classphp/estoque.php");
                                        }
                                    }
                                }                          
                            }else{
                                print "
                                    <script>
                                        window.document.addEventListener('DOMContentLoaded', function(){
                                            document.getElementById('config-display-mensagem-erro').style.display = 'block';
                                
                                            window.document.getElementById('config-display-cadastro').style.display = 'none'
                                            window.document.getElementById('config-display-excluir').style.display = 'none'
                                            window.document.getElementById('config-display-alterar').style.display = 'block'
                                
                                            window.document.getElementById('estilo-underline-cadastrar').style.textDecoration = 'none'
                                            window.document.getElementById('estilo-underline-excluir').style.textDecoration = 'none'
                                            window.document.getElementById('estilo-underline-alterar').style.textDecoration = 'underline'
                                        })
                                    </script>
                                ";
                            }
                        }
                    ?>

                    <?php
                        if(isset($_POST['procurar'])){
                            error_reporting(E_PARSE);

                            $cod_produto3 = $_POST['cod-produto3'];

                            $con = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
                            $consulta_cod = "SELECT cod AS 'codigo_existente' FROM produtos WHERE cod = $cod_produto3";
                            $execucao_cod = $con -> query($consulta_cod);
                            $resultado = $execucao_cod -> fetch_assoc();

                            if($cod_produto3 == $resultado['codigo_existente']){
                                print "
                                    <script>
                                        window.document.addEventListener('DOMContentLoaded', function(){
                                            window.document.getElementById('config-display-cadastro').style.display = 'none'
                                            window.document.getElementById('config-display-excluir').style.display = 'none'
                                            window.document.getElementById('config-display-alterar').style.display = 'block'
                                            window.document.getElementById('estilo-underline-cadastrar').style.textDecoration = 'none'
                                            window.document.getElementById('estilo-underline-excluir').style.textDecoration = 'none'
                                            window.document.getElementById('estilo-underline-alterar').style.textDecoration = 'underline'
                                        })
                                    </script>
                                ";   
                            }else{
                                print "
                                    <script>
                                        window.document.addEventListener('DOMContentLoaded', function(){
                                            window.document.getElementById('config-display-mensagem-erro').style.display = 'block'
                                            window.document.getElementById('config-display-cadastro').style.display = 'none'
                                            window.document.getElementById('config-display-excluir').style.display = 'none'
                                            window.document.getElementById('config-display-alterar').style.display = 'block'
                                            window.document.getElementById('estilo-underline-cadastrar').style.textDecoration = 'none'
                                            window.document.getElementById('estilo-underline-excluir').style.textDecoration = 'none'
                                            window.document.getElementById('estilo-underline-alterar').style.textDecoration = 'underline'
                                        })
                                    </script>
                                ";   
                            }
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
    
    <div class="config-display-block-tabela">
        <div class="config-display-flex-tabela">
            <table class="estilo-padrao-tabela">
                <tr>
                    <th class="comprimento-padrao-campo" style="width:30px;">cod</th>
                    <th style="width:180px;">nome</th>
                    <th style="width:95px;">quantidade</th>
                    <th style="width:130px;">categoria</th>
                    <th style="width:100px;">preço custo</th>
                    <th style="width:100px;">preço venda</th>
                    <th style="width:90px;">validade</th>
                    <th style="width:70px;">imposto</th>
                    <th style="width:120px;">observação</th>
                    <th style="width:50px;">img</th>
                </tr>
                <?php
                    $con = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
                    $consulta = "SELECT * FROM produtos";
                    $execucao = $con -> query($consulta);
                    if($execucao -> num_rows > 0){
                        while($coluna = $execucao -> fetch_assoc()){
                            print "
                                <tr>
                                    <td title='".$coluna['cod']."'>".$coluna['cod']."</td>
                                    <td title='".$coluna['nome']."'>".$coluna['nome']."</td>
                                    <td title='".$coluna['quantidade']."'>".$coluna['quantidade']."</td>
                                    <td title='".$coluna['categoria']."'>".$coluna['categoria']."</td>
                                    <td title='".$coluna['preco_custo']."'>".$coluna['preco_custo']." R$</td>
                                    <td title='".$coluna['preco_venda']."'>".$coluna['preco_venda']." R$</td>
                                    <td title='".$coluna['validade']."'>".$coluna['validade']."</td>
                                    <td title='".$coluna['impostos']."%'>".$coluna['impostos']."%</td>
                                    <td title='".$coluna['observacao']."'>".$coluna['observacao']."</td>
                                    <td title='".$coluna['icon_img']."'>".$coluna['icon_img']."</td>
                                </tr>
                            ";
                        }
                    }
                ?>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </table>
            <div class="config-positon-padrao">
                <span class="material-symbols-outlined estilo-botao-padrao5" onclick="window.print()">print</span>
                <span class="material-symbols-outlined estilo-botao-padrao5" onclick="eventoFechamento()">close</span>
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

    <div id="config-display-mensagem-erro">
        <div class="config-mensagem-erro">
            <div class="mensagem-erro">
                <span class="material-symbols-outlined">warning</span>
                <p class="mensagem config-especifico-mensagem">
                    é necessário selecionar um ícone para realizar a transação.
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
            <form>
                <div class="elementos2">
                    <input type="file" name="elemento-file" id="elemento-file">
                    <img src="../resources/icon-user.png" alt="icon-user" onclick="document.getElementById('elemento-file').click()">
                    <br>
                        <h1>usuario123</h1>
                    <br>
                    <button class="estilo-botao-padrao estilo-botao-padrao7">mudar icone</button>
                </div>
            </form>
            <form class="config-form2">
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
            </form>
        </div>
    </div>

    <div id="config-display-mensagem-ok">
        <div class="config-mensagem-erro">
            <div class="mensagem-erro">
                <span class="material-symbols-outlined">check</span>
                <p class="mensagem config-especifico-mensagem">
                    transação realizada com sucesso!!!
                </p>
                <button class="estilo-botao-padrao" onclick="eventoTransação()">OK</button>
            </div>
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