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
                <form class="config-especifico4" method="post" action="teste.php" enctype="multipart/form-data">
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
                            <label for="obs-produto" class="estilo-padrao-inputs estilo-padrao-inputs2">
                                <span class="material-symbols-outlined estilo-icon3">warning</span>
                                <input type="text" name="obs-produto" id="obs-produto" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="obs-produto" placeholder="observação" required>
                            </label>
                        </div>
                    </div>
                    <div class="config-form-padrao estilo-form-especifico2">
                        <div class="estilo-botao-padrao3 config-display-elementos1" onclick="eventoVerificar()">verificar</div>
                        <div class="estilo-botao-padrao3 config-display-elementos1" onclick="eventoVisualizar()">visualizar</div>

                        <button type="submit" class="estilo-botao-padrao3 config-display-elementos2" onclick="eventoCadastrar()">cadastrar</button>
                        <div class="estilo-botao-padrao3 config-display-elementos2" onclick="eventoCancelar()">cancelar</div>
                        <div class="estilo-botao-padrao3 config-display-elementos2" onclick="eventoVisualizar()">visualizar</div>

                    </div>
                </form>
            </div>

            <div id="config-display-excluir">
                <form class="config-especifico4 config-especifico5" method="post" enctype="multipart/form-data">
                    <div class="config-display-excluir">
                        <label for="cod-produto" class="estilo-padrao-inputs">
                            <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                            <input type="number" name="cod-produto" id="cod-produto" class="estilo-input-padrao estilo-input-padrao2 estilo-input-padrao3 config-readonly-padrao" id="obs-produto" placeholder="código do produto..." required oninput="eventoErro2()">
                        </label>
                        <button class="estilo-botao-padrao comprimento-botao">excluir</button>
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
                                <th>observação</th>
                                <th>img</th>
                            </tr>
                            <tr>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

            <div id="config-display-alterar">
                <form class="config-especifico4 config-especifico5" method="post" enctype="multipart/form-data">
                    <div class="config-display-excluir">
                        <label for="cod-produto3" class="estilo-padrao-inputs">
                            <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                            <input type="number" name="cod-produto3" id="cod-produto3" class="estilo-input-padrao estilo-input-padrao2 estilo-input-padrao3 config-readonly-padrao" placeholder="código do produto..." required oninput="eventoErro()">
                        </label>
                        <div class="estilo-botao-padrao comprimento-botao" onclick="eventoProcurar()">procurar</div>
                        <button class="estilo-botao-padrao comprimento-botao" name="alterar-produto" id="alterar-produto">alterar</button>
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
                                <th>observação</th>
                                <th>img</th>
                            </tr>
                            <tr>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                            </tr>
                        </table>
                    </div>

                    <div class="config-inline-flex">
                        <label for="nome-produto3" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs3">
                            <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                            <input type="text" name="nome-produto3" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="nome-produto3" placeholder="nome do produto..." required readonly>
                        </label>
                        <label for="quantidade-produto3" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs4">
                            <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                            <input type="number" name="quantidade-produto3" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="quantidade-produto3" placeholder="quantidade" required step="1" oninput="eventoQuantidade2()">
                        </label>
                        <label for="categoria-produto3" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs4">
                            <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                            <input type="text" name="categoria-produto3" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="categoria-produto3" placeholder="categoria" required list="categorias-produtos" readonly>
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
                        <label for="preco-custo3" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs4">
                            <span class="material-symbols-outlined estilo-icon3">paid</span>
                            <input type="number" name="preco-custo3" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="preco-custo3" placeholder="preço custo" required step="0.05" readonly oninput="eventoPreco3()">
                        </label>
                    </div>
                    <div class="config-inline-flex">
                        <label for="preco-venda3" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs4">
                            <span class="material-symbols-outlined estilo-icon3">paid</span>
                            <input type="number" name="preco-venda3" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="preco-venda3" placeholder="preço venda" required step="0.05" readonly oninput="eventoPreco3()">
                        </label>
                        <input type="file" name="img-produto" id="img-produto3" accept=".jpg, .jpeg, .png">
                        <label for="validade-produto3" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs3">
                            <span class="material-symbols-outlined estilo-icon3">shopping_bag</span>
                            <input type="text" name="validade-produto3" id="validade-produto3" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" placeholder="validade/garantia" required readonly oninput="eventoRegEx2()">
                        </label>
                        <label for="observacao3" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs3">
                            <span class="material-symbols-outlined estilo-icon3">warning</span>
                            <input type="text" name="observacao3" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="observacao3" placeholder="observação..." required readonly>
                        </label>
                        <div class="estilo-botao-padrao estilo-botao-padrao7">
                            <span class="material-symbols-outlined estilo-icon3">photo_camera</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="config-display-block-tabela">
        <div class="config-display-flex-tabela">
            <table class="estilo-padrao-tabela">
                <tr>
                    <th class="comprimento-padrao-campo">cod</th>
                    <th>nome</th>
                    <th>quantidade</th>
                    <th>categoria</th>
                    <th>preço custo</th>
                    <th>preço venda</th>
                    <th>validade</th>
                    <th>observação</th>
                    <th>img</th>
                </tr>
                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
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
                    <input type="text" name="nome-usuario" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="nome-usuario" placeholder="novo usuario" required readonly>
                </label>
                <label for="senha-usuario" class="estilo-padrao-inputs estilo-padrao-inputs2 estilo-padrao-inputs3">
                    <span class="material-symbols-outlined estilo-icon3">key</span>
                    <input type="text" name="senha-usuario" class="estilo-input-padrao estilo-input-padrao2 config-readonly-padrao" id="senha-usuario" placeholder="nova senha" required readonly>
                </label>
                <button class="estilo-botao-padrao estilo-botao-padrao7">atualizar</button>
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