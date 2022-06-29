<?php
/*03) Criar um algoritmo que receba um número e imprima
a tabuada desse número de 1 a 10 */
$numero = 0;
$tabuada = 0;
$mensagem="";
if (isset($_GET['enviar'])) { //essa linha pega o valor apos confimar que o botão de nome 'enviar' foi ativado
    if (!empty($_GET['numero'])) { //esse impede que o código mostre erros antes da variável ser preenchida,'se diferente de vazio faça:'
        $numero = $_GET['numero']; // essa pega o valor preenchido na fase acima e guarda ela numa variável que é utilizada na proxíma fase para calcular
        for ($tabuada = 1; $tabuada <= 10; $tabuada++) {
            $mensagem .= $numero. "X" .$tabuada. "=" .($numero * $tabuada). "<br>"; //$mensagem .= serve para dizer que $mensagem é igual $Mensagem mais o resto da condição. ex: $mensagem=$mensagem.$numero
        }
    }
}

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Desafio 03</title>
</head>
<body>
    <h1>Desafio 03</h1>

    <form action="" method="GET">
        <label for="numero">Digite um Número</label>
        <input id="numero" type="number" name="numero" placeholder="Complete com um número" value=<?php echo $numero?>>

        <input type="submit" value="Enviar" name="enviar">
    </form>
    <br>
    </form>
    <span><?php echo $mensagem ?></span>
</body>

</html>