<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro: Produtos e Clientes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    <link rel="stylesheet" href="../classcss/estilos-padroes.css">
    <link rel="stylesheet" href="../classcss/estilo-login.css">
    <script src="../classjs/index-padrao.js"></script>
</head>
<body onresize="tamanhoBody()">
    <div id="config-display-form">
        <div id="estilo-container">
            <form method="post" autocomplete="on" class="estilo-padrao-container" id="estilo-especifico1">
                <div id="config-container">
                    <h1 class="estilo-titulo-padrao">Logon</h1>
                    <div id="config-espaço">
                        <label for="nome-usuario" class="config-label-padrao">
                            <span class="material-symbols-outlined estilo-icones">person</span>
                            <input type="text" name="nome-usuario" id="nome-usuario" class="estilo-padrao-input" placeholder="nome usuario" required>
                        </label>
                        <label for="nome-usuario" class="config-label-padrao">
                            <span class="material-symbols-outlined estilo-icones">key</span>
                            <input type="password" name="senha-usuario" id="senha-usuario" class="estilo-padrao-input" placeholder="senha usuario" required>
                        </label>
                    </div>
                        <div id="estilo-mensagem">esqueceu de algo? <a href="#">cadastre-se</a>!</div> <br>
                        <button name="entrar" class="estilo-botao-padrao" id="estilo-botao1">entrar</button>
                        <br> <br>
                         <?php

                            if(isset($_POST['entrar'])){
                                $con = new mysqli('127.0.0.1:3306','root','','projeto_cadastro');
                                $ultimo_nome = "SELECT nome_adm AS 'ultimo_nome' FROM dado_adm ORDER BY id DESC LIMIT 1";
                                $execucao = $con -> query($ultimo_nome);
                                $resultado_nome = $execucao -> fetch_assoc();

                                $ultima_senha = "SELECT senha_adm AS 'ultima_senha' FROM dado_adm ORDER BY id DESC LIMIT 1";
                                $execucao_senha = $con -> query($ultima_senha);
                                $resultado_senha = $execucao_senha -> fetch_assoc();

                                if($_POST['nome-usuario'] == $resultado_nome['ultimo_nome'] && $_POST['senha-usuario'] == $resultado_senha['ultima_senha']){
                                    header('Location: ../classphp/produtos.php');
                                }else{
                                    print "<div id='estilo-mensagem-error'>usuário ou senha incorretos!!!</div>";
                                }
                            }
                         ?>

                </div>
            </form>
            <div class="estilo-padrao-container" id="estilo-especifico2">
                <?php
                    $con = new mysqli('127.0.0.1:3306','root','','projeto_cadastro');
                    $perfil = "SELECT perfil AS 'ultimo_perfil' FROM dado_adm ORDER BY id DESC LIMIT 1";
                    $execucao = $con -> query($perfil);
                    $resultado = $execucao -> fetch_assoc();
                ?>
                <img src="../resources/<?=$resultado['ultimo_perfil']?>" alt="icon-user" id="estilo-icon">
            </div>
        </div>
    </div>

    <div id="display-container-mensagem">
        <div class="container-mensagem mensagem-sistema">
            É nessário usar tela cheia para usar o sistema!!!
        </div>
    </div>

</body>
</html>