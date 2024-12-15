<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Perfil de Usuário</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=call" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=edit" />
    <link rel="stylesheet" href="../classcss/estilo-perfil.css">
    <link rel="stylesheet" href="../classcss/responsividade.css">
    <script src="../classjs/config.js"></script>
</head>
<body>
    <div id="config-display">
        <div id="condig-carregamento">
            <div id="modal-carregamento">
                <?php
                    $con = new mysqli('127.0.0.1:3306','root','','bd_profile');
                    $consulta = "SELECT * FROM dados_perfil ORDER BY cod DESC LIMIT 1";
                    $execucao = $con -> query($consulta);
                    $resultado = $execucao -> fetch_assoc();
                ?>
                <div id="config-perfil">
                    <img src="../resources/<?=$resultado['img']?>" alt="" id="config-img">
                </div>
                <h1>BEM VINDO, USUÁRIO!</h1>  
                    <br>
                    <div id="barra-completa">
                        <div id="barra-preenchida"></div>
                    </div>
                    <br>              
                <p>altere seu perfil por <br> preferência!</p>
            </div>
        </div>
    </div>
    <div id="condig-display-perfil">
        <div id="estilo-perfil">
            <img src="../resources/<?=$resultado['img']?>" alt="" id="config-perfil2">
            <h1 id="estilo-titulo"><?=$resultado['nome']?></h1>
            <br>
            <span class="estilo-texto">
                <span class="material-symbols-outlined">call</span> <?=$resultado['telefone']?>
            </span>
            <br>
            <span class="estilo-texto">
                <b>(!)</b> <?=$resultado['observacao']?>
            </span>
            <br>
            <button class="estilo-botao-padrao" id="botao-mudar-perfil" onclick="mudarPerfil()">mudar perfil</button>
            <div id="config-carregamento1"></div>
        </div>
    </div>
    <div id="config-display-form">
        <form id="config-form" method="post" enctype="multipart/form-data">
            <div class="estilo-div-padrao" id="estilo-div-especifico1">
                <img src="../resources/icon-camera.png" alt="icon-camera" id="estilo-camera">
                <input type="file" name="config-input-file" id="arquivo" accept=".jpg, .jpeg, .png">
                <div name="config-input-file" class="estilo-botao-padrao" id="estilo-especifico" onclick="document.getElementById('arquivo').click(), eventoFile()" onkeyup="alert('oi')">escolher arquivo</div>
            </div>
            <div class="estilo-div-padrao" id="estilo-div-especifico2">
                <div id="estilo-div">
                    <label for="nome" class="config-display-label config-display-label2">
                        <input type="text" name="nome" id="nome" class="config-input" required placeholder="nome usuário" minlength="3" maxlength="30">
                        <span class="material-symbols-outlined">edit</span>
                    </label>
                    <label for="telefone" class="config-display-label">
                        <input type="text" name="telefone" id="telefone" class="config-input" required placeholder="tel: (xx) +xx xxxxx-xxxx">
                        <span class="material-symbols-outlined">edit</span>
                    </label>
                    <label for="sobre" class="config-display-label">
                        <input type="text" name="sobre" id="sobre" class="config-input" required placeholder="sobre" minlength="4">
                        <span class="material-symbols-outlined">edit</span>
                    </label>
                    <div class="estilo-botao-padrao padrao-display" id="config-botao-div" onclick="eventoVerificar()">verificar</div>
                    <br>
                    <div class="estilo-botao-padrao padrao-display" id="config-botao-div2" onclick="eventoVoltar()">voltar</div>
                        <div id="display-block-botao">
                            <span id="display-botao">
                                <div class="estilo-botao-padrao estilo-botao-padrao2" id="evento-cancelar" onclick="eventoCancelar()">cancelar</div>
                                <button type="submit" class="estilo-botao-padrao estilo-botao-padrao2" id="evento-enviar">enviar
                                    <?php
                                        if(isset($_FILES['config-input-file'])){
                                            $local = "../resources/" .$_FILES['config-input-file']['name'];
                                            if(move_uploaded_file($_FILES['config-input-file']['tmp_name'],$local)){
                                                $nome = $_POST['nome'];
                                                $telefone = $_POST['telefone'];
                                                $sobre = $_POST['sobre'];
                                                $img = $_FILES['config-input-file']['name'];
                                                $con = new mysqli('127.0.0.1:3306','root','','bd_profile');
                                                $inserir = "INSERT INTO dados_perfil VALUES(DEFAULT, '$nome','$telefone','$sobre','$img')";
                                                if($con -> query($inserir)){
                                                    print "
                                                    <html>
                                                        <script>window.location = '../classphp/index.php'</script>
                                                    </html>
                                                    ";
                                                }
                                            }
                                        }
                                    ?>
                            </span>
                        </div>
                        <div id="config-carregamento"></div>
                        <p id="estilo-mensagem-erro">
                            preencha o formulário corretamente!
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>