<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styleHtml.css">
    <title>Exercício 4</title>
</head>
<body>
    <div id="divPrincipal">
        <h2>    
            Tela de saída
        </h2>
        <?php
            $nome = $_GET['nome'];
            $nasc = $_GET['ano'];
            $ano = date('Y') - $nasc;
            if($ano <=18){
                echo "$nome NÃO está apto para votar e nem dirigir.<br/><br/><br/><br/><br/><br/>";
            }else{
                echo "$nome está apto para votar e dirigir pois tem $ano anos.<br/><br/>";
            }
        ?>

        



        <a href="/exercicios/ex04html.html">
            <button>
                Voltar
            </button>
        </a>
    </div>
</body>
</html>