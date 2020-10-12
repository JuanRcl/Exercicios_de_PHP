<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
    <link rel="stylesheet" href="/css/stylePHP.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <div id="divPrincipal">
        <h2>
            Exercício 01
        </h2>
        <?php
        $preco = $_GET["p"];
        echo "O preço do produto é $preco <br/>";
        $preco -= $preco *0.10;
        echo "O preço do produto com 10% de aumento é $preco";
        ?>
    </div>
    

    <a href="../index.php">
        <button>
            Voltar
        </button>
    </a>
</body>
</html>