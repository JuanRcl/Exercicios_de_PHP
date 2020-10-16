<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/ex06.css">
    <title>Funcoes</title>
</head>
<body>
    
    <div id="divPrincipal">
        <h2>    
            EX 06 - Funções
        </h2>
        <form method="get" action="/exercicios/ex06-funcao.php">
            <fieldset><legend>Escolha</legend>
                Valor 1: <input type="number" name="v1"><br/><br/>
                valor 2: <input type="number" name="v2"><br/>

                <div class="operacoes">
                    <input type="radio" name="op" id="soma" value="1">
                    <label for="soma">Soma</label>
                    <input type="radio" name="op" id="sub" value="2">
                    <label for="sub">Subtração</label>
                    <input type="radio" name="op" id="mul" value="3">
                    <label for="mul">Multiplicação</label>
                </div>
            </fieldset>
            <input class="botao" type="submit" value="Enviar">
            <br/><br/>
           
        </form>
        <?php
           $v1 = isset($_GET["v1"]) ? $_GET["v1"]:0;
           $v2 = isset($_GET['v2']) ? $_GET["v2"]:0;
           $op = isset($_GET['op']) ? $_GET["op"]:0;

           switch($op){
                case 1:
                    soma($v1,$v2);
                    break;
                case 2:
                    sub($v1,$v2);
                    break;
                case 3:
                    mul($v1,$v2);
                    break;
                default:
                    echo "";
           }
            
        ?><br/><br/><br/><br/><br/><br/><br/>
        <a href="/index.php">
        <button class="botao">
            Voltar
        </button>
    </div>
    <?php
        function soma($a,$b){
            $r = $a + $b;
            echo "$a + $b = $r";
        }
        function sub($a,$b){
            $r = $a - $b;
            echo "$a - $b = $r";
        }
        function mul($a,$b){
            $r = $a * $b;
            echo "$a * $b = $r";
        }
    ?>
</body>
</html>