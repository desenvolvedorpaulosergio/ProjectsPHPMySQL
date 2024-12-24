<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sala de estoque</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"/>
    <link rel="stylesheet" href="../classcss/estilos-padroes.css">
    <link rel="stylesheet" href="../classcss/estilo-produtos.css">
    <script src="../classjs/index-padrao.js"></script>
</head>
<body>
    <header>
        <nav class="estilo-navegador">
            <h1>Estoques</h1>
            <a href="#">produtos</a>
            <a href="#"><ins>estoques</ins></a>
            <a href="#">clientes</a>
            <a href="#">relatórios</a>
            <a href="#">
                <span class="material-symbols-outlined">settings</span>
            </a>
        </nav>
    </header>

    <div class="config-display">
        <div class="config-display-flex">
            <div class="config-display-botoes">
                <button class="estilo-botao-padrao comprimento-padrao" id="botao-cadastrar" onclick="eventoCadastrar()"><small>cadastrar</small></button>
                <button class="estilo-botao-padrao comprimento-padrao" id="botao-excluir" onclick="eventoExcluir()"><small>excluir</small></button>
                <button type="submit" name="atualizar" class="estilo-botao-padrao comprimento-padrao evento-js-input" onclick="eventoAlterar()"><small>alterar</small></button>
            </div>
            <div id="config-display-cadastro">
                <form class="config-container-display-flex" id="formulario-insert" enctype="multipart/form-data" method="post">
                    <div class="estilo-div-form">
                        <div class="estilo-container-padrao">
                            <label for="nome-produto" class="config-label-padrao config-margin config-comprimento1">
                                <span class="material-symbols-outlined estilo-icones">shopping_bag</span>
                                <input type="text" name="nome-produto" id="nome-produto" class="estilo-padrao-input evento-input" placeholder="nome do produto" required>
                            </label>
                            <br>
                            <div class="config-display-inputs-inline">
                                <label for="quantidade" class="config-label-padrao config-margin config-comprimento2">
                                    <span class="material-symbols-outlined estilo-icones">shopping_bag</span>
                                    <input type="number" name="quantidade" id="quantidade" class="estilo-padrao-input evento-input" placeholder="quantidade" required>
                                </label>
                                <label for="categoria" class="config-label-padrao config-margin config-comprimento2">
                                    <span class="material-symbols-outlined estilo-icones">shopping_bag</span>
                                    <input type="text" name="categoria" id="categoria" class="estilo-padrao-input evento-input" placeholder="categoria" required list="lista">
                                    <datalist id="lista">
                                        <option value="Eletrônicos">Eletrônicos</option>
                                        <option value="Eletrodomésticos">Eletrodomésticos</option>
                                        <option value="Móveis">Móveis</option>
                                        <option value="Roupas">Roupas</option>
                                        <option value="Alimentos">Alimentos</option>
                                        <option value="Livros">Livros</option>
                                        <option value="Beleza">Beleza</option>
                                        <option value="Ferramentas">Ferramentas</option>
                                        <option value="Esportes">Esportes</option>
                                        <option value="Brinquedos">Brinquedos</option>
                                        <option value="Bebidas">Bebidas</option>
                                    </datalist>
                                </label>
                            </div>
                            <br>
                            <div class="config-display-inputs-inline">
                                <label for="preço-custo" class="config-label-padrao config-margin config-comprimento2">
                                    <span class="material-symbols-outlined estilo-icones">paid</span>
                                    <input type="number" name="preco-custo" id="preco-custo" class="estilo-padrao-input evento-input" placeholder="preço custo" required>
                                </label>
                                <label for="preco-venda" class="config-label-padrao config-margin config-comprimento2">
                                    <span class="material-symbols-outlined estilo-icones">paid</span>
                                    <input type="number" name="preco-venda" id="preco-venda" class="estilo-padrao-input evento-input" placeholder="preço venda" required>
                                </label>
                            </div>
                            <br>
                            <label for="validade" class="config-label-padrao config-margin config-comprimento1">
                                <span class="material-symbols-outlined estilo-icones">shopping_bag</span>
                                <input type="text" name="validade" id="validade" class="estilo-padrao-input evento-input" placeholder="validade: dd/mm/aaaa" required>
                            </label>
                        </div>
                        <div class="estilo-container-padrao">
                            <input type="file" class="evento-input" name="input-file" id="input-file" style="display: none;" accept=".jpg, .jpeg, .png">
                            <div class="estilo-botao-padrao evento-input" id="config-button-div" onclick="document.getElementById('input-file').click()">
                                <span class="material-symbols-outlined">photo_camera</span>
                            </div>
                            <br> <br>
                            <label for="observacao" class="config-label-padrao config-margin config-comprimento1">
                                <span class="material-symbols-outlined estilo-icones">warning</span>
                                <input type="text" name="observacao" id="observacao" class="estilo-padrao-input evento-input" placeholder="observação" required value="estoque cheio" readonly>
                            </label>
                        </div>
                    </div>
                    <div id="elemento-div">
                        <div name="verificar" class="estilo-botao-padrao" id="config-comprimento3" onclick="eventoVerificar()">verificar</div>
                        <div name="visualizar" class="estilo-botao-padrao config-comprimento2 elemento-botau" id="config-comprimento3" onclick="visualizarTabela()">visualizar</div>
                    </div>
                    <div class="display-block-none">
                        <div class="display-inline">
                            <button type="submit" name="cadastrar" id="cadastrar" class="estilo-botao-padrao config-comprimento2">cadastrar</button>
                            <div name="visualizar" class="estilo-botao-padrao config-comprimento2" onclick="eventoCancelar()">cancelar</div>
                            <div name="visualizar" class="estilo-botao-padrao config-comprimento2" onclick="visualizarTabela()">visualizar</div>
                        </div>
                    </div>
                    <?php
                        if(isset($_POST['cadastrar'])){

                            error_reporting(E_PARSE);

                            $nome = $_POST['nome-produto'];
                            $quantidade = $_POST['quantidade'];
                            $categoria = $_POST['categoria'];
                            $preco_custo = $_POST['preco-custo'];
                            $preco_venda = $_POST['preco-venda'];
                            $validade = $_POST['validade'];
                            $observacao = $_POST['observacao'];

                            if($_FILES['input-file']['name'] != ""){
                                $con = new mysqli('127.0.0.1:3306','root','','projeto_cadastro');
                                $nome_arquivo = $_FILES['input-file']['name'];
                                $inserir = "INSERT INTO produtos VALUES(DEFAULT, '$nome', $quantidade, '$categoria', $preco_custo, $preco_venda, '$validade', '$observacao', '$nome_arquivo')";
                                
                                $local_arquivo = "../resources/" . $_FILES['input-file']['name'];

                                if($con -> query($inserir)){
                                    if(move_uploaded_file($_FILES['input-file']['tmp_name'], $local_arquivo)){
                                        header("Location: ../classphp/produtos.php");
                                    }
                                }
                            }else{
                                print "
                                    <script>
                                        window.document.querySelectorAll('.config-display-modal-erro').forEach(function(elementos){
                                            elementos.style.display = 'block'
                                            window.document.getElementsByTagName('body')[0].style.overflowY = 'hidden'
                                        })
                                    </script>
                                ";
                            }
                        }
                    ?>
                </form>
            </div>


            <div id="formulario-excluir">
                <form class="config-container-display-flex" enctype="multipart/form-data" method="post">
                    <div class="organizacao-elemento-pesquisa">
                        <label for="observacao" class="config-label-padrao">
                            <input type="number" name="id_produto" id="id_produto" class="estilo-padrao-input config-comprimento1" placeholder="código do produto..." required>
                        </label>
                        <button class="estilo-botao-padrao config-comprimento4" name="excluir" id="excluir">excluir</button>
                        <div class="estilo-botao-padrao config-comprimento4" onclick="visualizarTabela()">visualizar</div>
                    </div> <br>
                    <div class="config-tabela">
                        <table class="config-table">
                            <tr>
                                <th scope="rowgroup">cod</th>
                                <th scope="rowgroup">nome</th>
                                <th scope="rowgroup">quantidade</th>
                                <th scope="rowgroup">categoria</th>
                                <th scope="rowgroup">pr. custo uni</th>
                                <th scope="rowgroup">pr. venda uni</th>
                                <th scope="rowgroup">validade</th>
                                <th scope="rowgroup">observação</th>
                                <th scope="rowgroup">img</th>
                            </tr>
                            <?php
                                $con = new mysqli('127.0.0.1:3306','root','','projeto_cadastro');
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
                                                <td title='".$coluna['preco_custo']." R$'>".$coluna['preco_custo']." R$</td>
                                                <td title='".$coluna['preco_venda']."' R$>".$coluna['preco_venda']." R$</td>
                                                <td title='".$coluna['validade']."'>".$coluna['validade']."</td>
                                                <td title='".$coluna['observacao']."'>".$coluna['observacao']."</td>
                                                <td title='".$coluna['icon_produto']."'>".$coluna['icon_produto']."</td>
                                            </tr>
                                        ";
                                    }
                                }
                            ?>
                        </table>
                    </div>
                </form>
            </div>
            <div id="config-display-formulario-atualizar">
                <form class="config-container-display-flex" id="formulario-atualizar" enctype="multipart/form-data" method="post">
                    <div class="organizacao-elemento-pesquisa">
                        <label for="observacao" class="config-label-padrao">
                            <input type="number" name="id_produto4" id="id_produto4" class="estilo-padrao-input config-comprimento1" placeholder="código do produto..." required>
                        </label>
                        <button name="procurar" id="procurar" class="estilo-botao-padrao config-comprimento4">procurar</button>
                        <button type="submit" name="alterar" class="estilo-botao-padrao config-comprimento4" id="botao-alterar">alterar</button>
                        <div class="estilo-botao-padrao config-comprimento4" onclick="visualizarTabela()">visualizar</div>
                    </div> <br>
                    <div class="config-tabela config-tabela2">
                        <table class="config-table">
                            <tr>
                                <th scope="rowgroup">cod</th>
                                <th scope="rowgroup">nome</th>
                                <th scope="rowgroup">quantidade</th>
                                <th scope="rowgroup">categoria</th>
                                <th scope="rowgroup">pr. custo uni</th>
                                <th scope="rowgroup">pr. venda uni</th>
                                <th scope="rowgroup">validade</th>
                                <th scope="rowgroup">observação</th>
                                <th scope="rowgroup">img</th>
                            </tr>
                            <?php
                                $con = new mysqli('127.0.0.1:3306','root','','projeto_cadastro');
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
                                                <td title='".$coluna['preco_custo']." R$'>".$coluna['preco_custo']." R$</td>
                                                <td title='".$coluna['preco_venda']." R$'>".$coluna['preco_venda']." R$</td>
                                                <td title='".$coluna['validade']."'>".$coluna['validade']."</td>
                                                <td title='".$coluna['observacao']."'>".$coluna['observacao']."</td>
                                                <td title='".$coluna['icon_produto']."'>".$coluna['icon_produto']."</td>
                                            </tr>
                                        ";
                                    }
                                }
                            ?>
                        </table>
                    </div>
                    <div id="config-especifico">
                        <label for="nome-produto" class="config-label-padrao">
                            <span class="material-symbols-outlined estilo-icones estilo-icones2">shopping_bag</span>
                            <input type="text" name="nome-produto" id="nome-produto3" class="estilo-padrao-input evento-js-input" placeholder="nome do produto" required value="" readonly>
                        </label>
                        <label for="quantidade" class="config-label-padrao">
                            <span class="material-symbols-outlined estilo-icones estilo-icones2">shopping_bag</span>
                            <input type="number" name="quantidade" id="quantidade3" class="estilo-padrao-input estilo-padrao-input2 evento-js-input" placeholder="quantidade" required value="" readonly>
                        </label>
                        <label for="categoria" class="config-label-padrao">
                            <span class="material-symbols-outlined estilo-icones estilo-icones2">shopping_bag</span>
                            <input type="text" name="categoria" id="categoria3" class="estilo-padrao-input estilo-padrao-input2 evento-js-input" placeholder="categoria" required value="" list="lista" readonly>
                        </label>
                        <label for="preco_custo" class="config-label-padrao">
                            <span class="material-symbols-outlined estilo-icones estilo-icones2">paid</span>
                            <input type="number" name="preco_custo" id="preco_custo3" class="estilo-padrao-input estilo-padrao-input2 evento-js-input" placeholder="preço custo" value="" readonly step="0.05">
                        </label>
                    </div>
                    <div id="config-especifico">
                        <label for="preco_venda" class="config-label-padrao">
                            <span class="material-symbols-outlined estilo-icones estilo-icones2">paid</span>
                            <input type="number" name="preco_venda" id="preco_venda3" class="estilo-padrao-input estilo-padrao-input2 evento-js-input" placeholder="preço venda" required value="" readonly step="0.05">
                        </label>
                        <label for="validade" class="config-label-padrao">
                            <span class="material-symbols-outlined estilo-icones estilo-icones2">shopping_bag</span>
                            <input type="text" name="validade" id="validade3" class="estilo-padrao-input estilo-padrao-input2 evento-js-input" placeholder="validade" required value="" readonly>
                        </label>
                        <label for="observacao" class="config-label-padrao">
                            <span class="material-symbols-outlined estilo-icones estilo-icones2">warning</span>
                            <input type="text" name="observacao" id="observacao3" class="estilo-padrao-input evento-js-input" placeholder="observação" required value="" readonly>
                        </label>
                        <input type="file" class="evento-input" name="input-file" id="input-file" style="display: none;" accept=".jpg, .jpeg, .png" value="">
                        <label for="observacao" class="config-label-padrao">
                            <div class="estilo-botao-padrao config-comprimento4" style="padding: 0;" onclick="document.getElementById('input-file').click()">
                            <span class="material-symbols-outlined estilo-icones estilo-icones2 estilo-icones3">photo_camera</span>
                            </div>
                        </label>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
    <div class="config-display-modal-erro">
        <div class="config-modal-erro">
            <div class="modal-erro">
                <span class="material-symbols-outlined estilo-icones">warning</span>
                <div class="estilo-mensagem">
                    preencha os dados corretamente!!!
                </div>
                <button class="estilo-botao-padrao" onclick="eventoClose()">OK</button>
            </div>
        </div>
    </div>

    <?php
        if(isset($_POST['procurar'])){
            error_reporting(E_PARSE);
            $codigo_elemento = $_POST['id_produto4'];
            $con = new mysqli('127.0.0.1:3306','root','','projeto_cadastro');
            $consulta = "SELECT * FROM produtos WHERE cod = $codigo_elemento";
            $execucao = $con -> query($consulta);
            $resultado = $execucao -> fetch_assoc();

            if($resultado['nome'] != ""){
                print "
                    <script>
                        window.document.getElementById('nome-produto3').value = '".$resultado['nome']."';
                        window.document.getElementById('quantidade3').value = '".$resultado['quantidade']."';
                        window.document.getElementById('categoria3').value = '".$resultado['categoria']."';
                        window.document.getElementById('preco_custo3').value = '".$resultado['preco_custo']."';
                        window.document.getElementById('preco_venda3').value = '".$resultado['preco_venda']."';
                        window.document.getElementById('validade3').value = '".$resultado['validade']."';
                        window.document.getElementById('observacao3').value = '".$resultado['observacao']."';

                        window.document.getElementById('botao-alterar').style.display = 'block'
                        window.document.getElementById('formulario-insert').style.display = 'none'
                        window.document.getElementById('formulario-excluir').style.display = 'none'
                        window.document.getElementById('config-display-formulario-atualizar').style.display = 'block'
                        
                        window.document.querySelectorAll('.evento-js-input').forEach(function(elementos){
                            elementos.readOnly = false
                            })
                            
                    </script>
                ";
            }else{
                print "
                    <script>
                        window.document.querySelectorAll('.config-display-modal-erro').forEach(function(elementos){
                            elementos.style.display = 'block'
                            window.document.getElementsByTagName('body')[0].style.overflowY = 'hidden'
                            })
                        window.document.getElementById('formulario-insert').style.display = 'none'
                        window.document.getElementById('formulario-excluir').style.display = 'none'
                        window.document.getElementById('config-display-formulario-atualizar').style.display = 'block'
                        window.document.getElementById('botao-alterar').style.display = 'none'
                            
                        window.document.querySelectorAll('.evento-js-input').forEach(function(elementos){
                            elementos.readOnly = true
                        })
                    </script>
                ";
            }
        }
    ?>
    
    <?php
        if(isset($_POST['alterar'])){
        }
    ?>

    <div class="display-container-tabela">
        <div class="container-tabela"> 
            <div class="tabela">
                <table class="config-table">
                    <tr>
                        <th scope="rowgroup">cod</th>
                        <th scope="rowgroup">nome</th>
                        <th scope="rowgroup">quantidade</th>
                        <th scope="rowgroup">categoria</th>
                        <th scope="rowgroup">pr. custo uni</th>
                        <th scope="rowgroup">pr. venda uni</th>
                        <th scope="rowgroup">validade</th>
                        <th scope="rowgroup">observação</th>
                        <th scope="rowgroup">img</th>
                    </tr>
                    <?php
                        $con = new mysqli('127.0.0.1:3306','root','','projeto_cadastro');
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
                                        <td title='".$coluna['preco_custo']." R$'>".$coluna['preco_custo']." R$</td>
                                        <td title='".$coluna['preco_venda']." R$'>".$coluna['preco_venda']." R$</td>
                                        <td title='".$coluna['validade']."'>".$coluna['validade']."</td>
                                        <td title='".$coluna['observacao']."'>".$coluna['observacao']."</td>
                                        <td title='".$coluna['icon_produto']."'>".$coluna['icon_produto']."</td>
                                    </tr>
                                ";
                            }
                        }
                    ?>
                </table>
            </div>
            <div class="alinhamento-display">                
                <span class="material-symbols-outlined config-botao4" onclick="window.print()">print</span>
                <button class="estilo-padrao-botao2 config-botao2" onclick="eventoFechar()">X</button>
            </div>
        </div>
    </div>

    <?php
        if(isset($_POST['excluir'])){

            error_reporting(E_PARSE);

            $codigo = $_POST['id_produto'];

            $con = new mysqli('127.0.0.1:3306','root','','projeto_cadastro');
            $consulta = "SELECT nome AS 'nome_existente' FROM produtos WHERE cod = $codigo";
            $execucao = $con -> query($consulta);
            $resultado = $execucao -> fetch_assoc();

            if($_POST['id_produto'] == "" || $resultado['nome_existente'] == "" || $_POST['id_produto'] <= 0){
                print "
                    <script>
                            window.document.querySelectorAll('.config-display-modal-erro').forEach(function(elementos){
                            elementos.style.display = 'block'
                            window.document.getElementsByTagName('body')[0].style.overflowY = 'hidden'
                            })

                            window.document.getElementById('formulario-insert').style.display = 'none'
                            window.document.getElementById('formulario-excluir').style.display = 'block'
                            window.document.getElementById('config-display-formulario-atualizar').style.display = 'none'
                            
                            window.document.getElementById('botao-cadastrar').style.textDecoration = 'none'
                            window.document.getElementById('botao-excluir').style.textDecoration = 'underline'
                            window.document.getElementById('botao-alterar').style.textDecoration = 'none'
                    </script>
                ";
            }else{
                $con = new mysqli('127.0.0.1:3306','root','','projeto_cadastro');
                $delete = "DELETE FROM produtos WHERE cod = $codigo";
                if($con -> query($delete)){
                    print "
                        <script>
                            window.location = '../classphp/produtos.php'
                            window.document.getElementById('formulario-insert').style.display = 'none'
                            window.document.getElementById('formulario-excluir').style.display = 'block'
                            window.document.getElementById('config-display-formulario-atualizar').style.display = 'none'
                        
                            window.document.getElementById('botao-cadastrar').style.textDecoration = 'none'
                            window.document.getElementById('botao-excluir').style.textDecoration = 'underline'
                            window.document.getElementById('botao-alterar').style.textDecoration = 'none'
                        </script>
                    ";
                }
            }
        }
    ?>
    <!-- <div id="display-container-mensagem">
        <div class="container-mensagem mensagem-sistema">
            É nessário usar tela cheia para usar o sistema!!!
        </div>
    </div> -->
</body>
</html>