<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestesBD</title>
    <link rel="stylesheet" href="../classcss/consultabd.css">
</head>
<body>
    <div id="config-container">
        <table>
            <caption>Análise de Dados em Registro Escolar</caption>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Sexo</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Inscricao</th>
                    <th>Id Curso</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $con = new mysqli('127.0.0.1:3306','root','','registro_escolar');                    
                    $consulta = "SELECT * FROM alunos";
                    $resultado = $con -> query($consulta);
                    if($resultado -> num_rows > 0){
                        while($coluna = $resultado -> fetch_assoc()){
                            print
                            "
                                <tr>
                                    <td>".$coluna['matricula']."</td>
                                    <td>".$coluna['nome']."</td>
                                    <td>".$coluna['idade']."</td>
                                    <td>".$coluna['sexo']."</td>
                                    <td>".$coluna['telefone']."</td>
                                    <td>".$coluna['endereco']."</td>
                                    <td>".$coluna['ano_inscricao']."</td>
                                    <td>".$coluna['id_curso']."</td>
                                </tr>
                            ";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
        <?php
            $con = new mysqli('127.0.0.1:3306','root','','registro_escolar');

            $par = "SELECT COUNT(nome) as 'total_par' FROM alunos WHERE matricula%2 = 0";
            $resultado = $con -> query($par);
            $consulta1 = $resultado -> fetch_assoc();

            $impar = "SELECT COUNT(nome) AS 'total_impar' FROM alunos WHERE matricula%2 = 1";
            $resultado2 = $con -> query($impar);
            $consulta2 = $resultado2 -> fetch_assoc();

            $ultimo_nome = "SELECT nome as 'ultimo_nome' from alunos order by matricula desc limit 1";
            $resultado3 = $con -> query($ultimo_nome);
            $consulta_nome = $resultado3 -> fetch_assoc();       
        ?>
    <div id="estilo-container">
        <ul id="config-lista">
            <li>total registros pares: <?=$consulta1['total_par']?></li>
            <li>total registros impares: <?=$consulta2['total_impar']?></li>
            <li>ultimo nome registrado: <?=$consulta_nome['ultimo_nome']?></li>
            <li>...</li>
            <li>...</li>
            <li>...</li>
        </ul>
    </div>

</body>
</html>