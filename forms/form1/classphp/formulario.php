<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulário</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=phone_iphone" />
    <link rel="stylesheet" href="../classcss/index.css">
    <link rel="stylesheet" href="../classcss/responsividade.css">
    <script src="../classjs/index.js"></script>
</head>
<body>
    <div id="config-display-container">
        <div id="config-container">
            <div id="estilo-modal-carregamento"></div>
        </div>
    </div>

    <div id="config-display-mensagem">
        <div id="config-flex-mensagem">
            É necessário que você deixe sua tela em Landscape.
            <span class="material-symbols-outlined" id="config-celular">phone_iphone</span>
        </div>
    </div>
    <div id="config-display-form">
        <div id="estilo-formulario">
            <form method="post" id="config-form">
                <div id="div-form">
                    <div class="config-container-forms">
                        <div id="confi-div-especifico"></div>
                        <label for="nome">
                            <input type="text" name="nome" id="nome" placeholder="nome completo..." required minlength="8" maxlength="30">
                        </label>
                        <br> <br> <br>
                        <label for="cpf">
                            <input type="text" name="cpf" id="cpf" required placeholder="cpf: xxx.xxx.xxx-xx">
                        </label>
                        <br> <br>
                        <label for="genero" id="genero">
                            <span>sexo:</span>
                            <span><input type="radio" name="genero" id="" value="m" checked> m</span>
                            <span><input type="radio" name="genero" id="" value="f"> f</span>
                            <span><input type="radio" name="genero" id="" value="outro"> outro</span>
                        </label>
                        <br>
                        <label for="endereco">
                            <textarea name="endereco" id="endereco" placeholder="endereço"></textarea>
                        </label>
                    </div>

                    <div class="config-container-forms">
                        <label for="gmail">
                            <input type="email" name="gmail" id="gmail" placeholder="gmail: exemplo@gmail.com" required>
                        </label>
                        <br> <br> <br>
                        <label for="senha">
                            <input type="password" name="senha" id="senha" minlength="8" maxlength="30" required placeholder="senha">
                        </label>
                        <br> <br>
                        <label for="telefone">
                            <input type="text" name="telefone" id="telefone" placeholder="telefone: (xx) +xx xxxxx-xxxx">
                        </label>
                        <br> <br>
                        <label for="observacao">
                            <textarea name="observacao" id="observacao" placeholder="observacao"></textarea>
                        </label>
                    </div>
                </div>
                <button class="estilo-botao-padrao" id="config-display-botao1" name="cadastrar">CADASTRAR</button>
                <br> <br>
                <?php

                error_reporting(E_ERROR | E_PARSE);

                if(isset($_POST['cadastrar'])){
                    $nome = $_POST['nome'];
                    $cpf = $_POST['cpf'];
                    $genero = $_POST['genero'];
                    $endereco = $_POST['endereco'];
                    $gmail = $_POST['gmail'];
                    $senha = $_POST['senha'];
                    $telefone = $_POST['telefone'];
                    $observacao = $_POST['observacao'];

                    $con = new mysqli('127.0.0.1:3306','root','','cadastro_pessoas');
                    $inserir = "INSERT INTO registros VALUES(DEFAULT, '$nome', '$cpf','$genero','$endereco','$gmail','$senha','$telefone','$observacao')";
                    if($con -> query($inserir)){
                        header("Location: ../classphp/login.php");
                    }
                }
                ?>
            </form>
            <p id="mensagem-erro">preencha os dados corretamente!!</p>
        </div>
        <button class="estilo-botao-padrao" onclick="eventoVerificar()" id="config-display-botao2">VERIFICAR</button>
        <div id="estilo-mini-carregamento"></div>
    </div>

</body>
</html>