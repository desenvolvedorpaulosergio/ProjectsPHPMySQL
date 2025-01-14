<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classe de produtos</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"/>
    <link rel="stylesheet" href="../classcss/estilos-padroes.css">
    <link rel="stylesheet" href="../classcss/estilos-lista.css">
</head>
<body>
    <header class="config-display-header" id="config-header-especifico">
        <nav class="config-nav">
            <h1 class="estilo-titulo-padrao2">Produtos</h1>
            <a href="#"><ins>produtos</ins></a>
            <a href="../classphp/estoque.php">estoques</a>
            <a href="#">clientes</a>
            <a href="#" class="config-padrao-relatorios">
                relatórios
                <ul class="config-padrao-sub-nav" id="elementos">
                    <li onclick="window.location = '../classphp/relatorios.php'">produtos</li>
                    <li>clientes</li>
                </ul>
            </a>
            <a href="#">
                <span class="material-symbols-outlined estilo-icon2" onclick="eventoClick()">settings</span>
            </a>
        </nav>
    </header>

    <main>
        <?php
            $con = new mysqli('127.0.0.1:3306','root','','projeto_estoque');
            $consulta = "SELECT * FROM produtos";
            $execucao = $con -> query($consulta);
            if($execucao -> num_rows > 0){
                while($coluna = $execucao -> fetch_assoc()){
                    print "
                        <div class='estilo-padrao-lista'>
                            <img src='../resources/".$coluna['icon_img']."' alt='icon-padrao' class='estilo-icone-produto' width='100px'> <br>
                            <h1 title='".$coluna['nome']."' class='estilo-titulo-lista'>".$coluna['nome']."</h1>
                            <p title='".$coluna['quantidade']."' class='estilo-valor-lista'>unidades: ".$coluna['quantidade']."</p>
                            <p title='".$coluna['preco_venda']."' class='estilo-valor-lista'>".$coluna['preco_venda']."R$ <small><del>1,50R$</del></small></p> <br>
                            <button class='estilo-botao-padrao'>agrupar</button>
                        </div>
                    ";
                }
            }
        ?>
    </main>  
    
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