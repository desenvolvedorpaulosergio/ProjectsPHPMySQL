<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema de categoria complexa: projeto-cadastro</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"/>
    <link rel="stylesheet" href="../classcss/estilo-logon.css">
    <script src="../classjs/configjs.js"></script>
    <link rel="stylesheet" href="../classcss/estilos-padroes.css">
</head>
<body>

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

    <div id="config-container-display">
        <div class="config-container-padrao">
            <div class="comprimento-padrao" id="config-especifico1">
                <form method="post" id="config-posicao-div">
                    <h1 class="estilo-titulo-padrao">Logon</h1>
                    <label for="nome-usuario" class="estilo-padrao-inputs">
                        <span class="material-symbols-outlined">person</span>
                        <input type="text" name="nome-usuario" class="estilo-input-padrao" id="nome-usuario" placeholder="nome usuário" required>
                    </label>
                    <label for="senha-usuario" class="estilo-padrao-inputs">
                        <span class="material-symbols-outlined">key</span>
                        <input type="password" name="senha-usuario" class="estilo-input-padrao" id="senha-usuario" placeholder="senha..." required>
                    </label>
                    <p class="mensagem">
                        esqueceu de algo? <a href="#">contate-nos</a>!
                    </p>
                    <br>
                    <button name="enviar" id="enviar" class="estilo-botao-padrao config-comprimento-tipo1">entrar</button>
                    <?php
                        if(isset($_POST['enviar'])){
                            $con = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
                            $consulta = "SELECT nome_usuario, senha_usuario, icon_usuario FROM usuario ORDER BY id DESC LIMIT 1";
                            $execucao = $con -> query($consulta);
                            $resultado = $execucao -> fetch_assoc();
                            
                            $nome_usuario =  $_POST['nome-usuario']; $senha_usuairo = $_POST['senha-usuario'];
                            
                            if($nome_usuario == $resultado['nome_usuario'] && $senha_usuairo == $resultado['senha_usuario']){
                                header("Location: ../classphp/estoque.php");
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
            <?php
                $con = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
                $consulta_icon = "SELECT icon_usuario FROM usuario ORDER BY id DESC LIMIT 1";
                $execucao = $con -> query($consulta_icon);
                $resultado = $execucao -> fetch_assoc();
            ?>
            <div class="comprimento-padrao" id="config-especifico2">
                <img src="../resources/<?=$resultado['icon_usuario']?>" alt="icon-user" id="config-icon-user">
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