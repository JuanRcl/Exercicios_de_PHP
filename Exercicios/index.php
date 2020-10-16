<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
    <link rel="stylesheet" href="css/inicial.css">    
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <section class="principal">
        <h2>    
            Tela de saida
        </h2>
        <p class="nome">
            <?php
                $nome = "Juan Pablo";
                $idade = 20; 
                echo "$nome tem $idade anos <br\>";
                
            ?>
        </p>
        
        <section class="seclink">
            <div id="elink">
                <h4><a id="links" href="/exercicios/ex01.php">Exercício 01</a></h4>
                <h4><a id="links" href="/exercicios/ex02html.html">Exercício 02</a></h4>
                <h4><a id="links" href="/exercicios/ex03html.html">Exercício 03</a></h4>
                <h4><a id="links" href="/exercicios/ex04html.html">Exercício 04</a></h4>
                <h4><a id="links" href="/exercicios/ex05php.php">Exercício 05</a></h4>
                <h4><a id="links" href="/exercicios/ex06-funcao.php">Exercício 06</a></h4>
                <h4><a id="links" href="/exercicios/ex07-funcoes2.php">Exercício 07</a></h4>
            </div>
            <div id="dlink">
                <h3 class="frase">
                    Exercicios de PHP 
                </h3>
        </section>
        </section>
        
        <section class="secproje">
            <div class="divsistema">
                <h2>Projetos</h2>
                <h3 class="proj">Sistema de triagem de RG</h3>
                <a href="/projeto/proj.php" class="botaoproj"><button >Ver projeto</button></a>
            </div> 
        </section>
</body>
</html>