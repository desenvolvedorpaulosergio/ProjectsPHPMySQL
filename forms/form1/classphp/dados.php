<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../classcss/estilo-dados.css">
</head>
<body>
    <div id="config-display-form">

        <?php
        
            session_start();

            $con = new mysqli('127.0.0.1:3306','root','','cadastro_pessoas');
            $consulta = "SELECT * FROM registros WHERE gmail = '".$_SESSION['gmail_usuario']."'";
            $execucao = $con -> query($consulta);
            $resultado_coluna = $execucao -> fetch_assoc();
        ?>

        <div id="estilo-formulario">
            <h1>DADOS</h1>
            <ul id="estilo-lista">
                <li> id: <?=$resultado_coluna['id']?></li>
                <li> nome: <?=$resultado_coluna['nome']?></li>
                <li> cpf: <?=$resultado_coluna['cpf']?></li>
                <li> sexo: <?=$resultado_coluna['sexo']?></li>
                <li> endereço: <?=$resultado_coluna['endereco']?></li>
                <li> gmail: <?=$resultado_coluna['gmail']?></li>
                <li> senha: <?=$resultado_coluna['senha']?></li>
                <li> telefone: <?=$resultado_coluna['telefone']?></li>
                <li> observacao: <?=$resultado_coluna['observacao']?></li>
            </ul>
        </div>
    </div>
</body>
</html>