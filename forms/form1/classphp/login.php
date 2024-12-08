<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PHP</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=phone_iphone" />
    <link rel="stylesheet" href="../classcss/estilo-login.css">
    <link rel="stylesheet" href="../classcss/responsividade2.css">
</head>
<body>
    <div id="config-display-form">
        <div id="estilo-formulario">
            <div class="estilo-container-padrao" id="estilo-container-especifico1">
                <form method="post" id="estilo-login">
                    <h1 id="estilo-titulo">LOGIN</h1>
                    <br>
                    <label for="gmail">
                        <input type="email" name="gmail" id="gmail" placeholder="gmailcadastrado@gmail.com" required>
                    </label>
                    <br> <br>
                    <label for="senha">
                        <input type="password" name="senha" id="" placeholder="senha" required>
                    </label> 
                    <br> <br>
                    <span id="estilo-palavras1">não é registrado?</span> <a href="../classphp/formulario.php" id="estilo-palavras2">cadastre-se!</a>
                    <br> <br>
                    <button id="estilo-botao" name="botao-entrar">ENTRAR</button> <br>
                    <div>
                        <?php
                            error_reporting(E_ERROR | E_PARSE);
                            if(isset($_POST['botao-entrar'])){
                                $gmail = $_POST['gmail'];
                                $senha = $_POST['senha'];

                                $con =  new mysqli('127.0.0.1:3306','root','','cadastro_pessoas');
                                $consulta_gmail = "SELECT gmail as 'gmail' FROM registros WHERE gmail = '$gmail'";
                                $execucao_gmail = $con -> query($consulta_gmail);
                                $resultado_gmail = $execucao_gmail -> fetch_assoc();

                                $consulta_senha = "SELECT senha 'senha' FROM registros WHERE gmail = '$gmail'";
                                $execucao_senha = $con -> query($consulta_senha);
                                $resultado_senha = $execucao_senha -> fetch_assoc();
                                if($resultado_gmail['gmail'] == $gmail && $resultado_senha['senha'] = $senha){
                                    header("Location: ../classphp/dados.php");
                                }else{
                                    print "<br> <h2>gmail ou senha inválidos!!!</h2>";
                                }
                            }
                        ?>
                    </div>
                </form>
            </div>
            <div class="estilo-container-padrao" id="estilo-container-especifico2"></div>
        </div>
    </div>

    <div id="config-display-mensagem">
        <div id="config-flex-mensagem">
            É necessário que você deixe sua tela em Landscape.
            <span class="material-symbols-outlined" id="config-celular">phone_iphone</span>
        </div>
    </div>
</body>
</html>