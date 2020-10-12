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
            Exercício 02 PHP
        </h2>
        <?php
            $valor = $_POST['v1'];
            $valor = $valor + ($valor * 0.10); 
            echo "O valor recebido foi $valor";
        ?>
        
    </div>
    <a href="/index.php">
        <button>
            Voltar
        </button>
    </a>
</body>
</html>