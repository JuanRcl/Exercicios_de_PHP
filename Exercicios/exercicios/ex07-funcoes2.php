<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/ex07.css">
    <title>Funcoes</title>
</head>
<body>
    
    <div id="divPrincipal">
        <h2>    
            EX 07 - Funções em outro arquivo
        </h2>
        <fieldset><legend>Mensagem de boas vindas</legend>
            <?php
                include "funcoes.php";
                $nome = "Juan Pablo";
                $v1 = 200;
                $v2 = 100; 
                msg($nome);
                $s = soma($v1,$v2);
                echo "A soma dos dois números é: $s";
            ?>
        </fieldset>
    </div>
    <a href="../index.php">
        <button class="botao">
            Voltar
        </button>
    </a>
</body>      
</html>