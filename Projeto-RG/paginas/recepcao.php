<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Sistema de triagem de RG</title>
</head>
<body>
    <header>
        <h1>
            Triagem de documentos - RG
        </h1>
    </header>

    <section class="principal">
        <div>

        </div>
        <div class="edocumentos">
            <fieldset><legend>Serviço</legend>
                <form method="GET" action="proj.php">
                    <input type="radio" name="oprg" id="pmaior" value="1" checked>
                    <label for="pmaior">Primeira Via Maior</label>
                    <input type="radio" name="oprg" id="pmenor" value="2">
                    <label for="pmenor">Primeira Via menor <br/><br/></label>
                    <input type="radio" name="oprg" id="smaior" value="3">
                    <label for="smaior">Segunda Via Maior</label>
                    <input type="radio" name="oprg" id="smenor" value="4">
                    <label for="smenor">Segunda Via Menor <br/><br/></label>
                    <input type="radio" name="oprg" id="at" value="5">
                    <label for="at">Atestado de Antecedentes Criminais<br/><br/></label>
                    <input class="botao" type="submit" value="Escolher">
                </form>
            </fieldset>
        </div>

        <div class="ddocumentos">
            <fieldset><legend>Documentos </legend>
                <?php
                    $oprg = $_GET["oprg"];
                    switch($oprg){
                        case 1:
                            echo "<input type='radio' name='doc' id='nas'>
                            <label for='cert'>Certidão de Nascimento</label>
                            <input type='radio' name='doc' id='cas'>
                            <label for='cas'>Certidão de Casamento</label><br/>
                            <input type='radio' name='doc' id='res'>
                            <label for='res'>Comprovante de Residência</label><br/><br/>
                            <input class='botao' type='submit' value='Enviar'>";
                            
                        break;
                        case 2:
                            echo "<input type='radio' name='doc' id='nas'>
                            <label for='cert'>Certidão de Nascimento</label>
                            <input type='radio' name='doc' id='resp'>
                            <label for='resp'>Documento do Responsável Legal</label><br/>
                            <input type='radio' name='doc' id='res'>
                            <label for='res'>Comprovante de Residência</label><br/><br/>
                            <input class='botao' type='submit' value='Enviar'>";
                            break;
                        default:
                            echo "Opção inválida, tente uma opção válida";
                    }

                ?>
            </fieldset>

            
        </div>
    </section>
</body>
</html>