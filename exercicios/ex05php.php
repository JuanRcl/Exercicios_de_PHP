<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/ex05.css">
    <title>Document</title>
</head>
<body>
<div id="divPrincipal">
        <h2>    
            EX 05 - Switch Case
        </h2>
        <form method="get" action="/exercicios/ex05php.php">
            <fieldset><legend>Escolha</legend>
                <input type="radio" name="compra" id="esc" value="1">
                <label for="esc">Caneta</label>
                <input type="radio" name="compra" id="esc1" value="2">
                <label for="esc1">Lápis</label>
                <input type="radio" name="compra" id="esc2" value="3">
                <label for="esc2">Borracha</label>
            </fieldset>
            <input type="submit" value="Enviar">
        </form>
        <?php
            $compra = $_GET['compra'];
            switch($compra){
                case 1:
                    echo "A opção selecionada foi Caneta";
                    break;
                case 2:
                    echo "A opção selecionada foi Lápis";
                    break;
                case 3:
                    echo "A opção selecionada foi Borracha";
                    break;
                default:
                    echo  "";
                   
            }   
           
        ?>
        
    </div>
</body>
</html>