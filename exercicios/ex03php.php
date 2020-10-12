<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/stylePHP.css">
    <title>EX02 PHP</title>
</head>
<body>
<div id="divPrincipal">
        <h2>
            Exercício 03 PHP
        </h2>
        <?php
            $nome = $_POST['nome'];
            $ano = $_POST['ano'];
            $sexo = $_POST['sexo'];
            $idade = date('Y') - $ano;
            $tamanho = $_POST['tamanho'];
            $texto = $_POST['texto'];
            $cor = $_POST['cor2'];
            echo "O $nome, tem $idade anos e é $sexo.<br/> Tem o tamanho $tamanho e digitou '$texto'
            e escolheu a cor '$cor'.";
            
        ?>
        
    </div>
    <a href="/index.php">
        <button>
            Voltar
        </button>
    </a>
</body>
</html>