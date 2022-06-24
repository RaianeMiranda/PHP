<?php
$numero1 = "";
$numero2 = "";

if (isset($_GET["enviar"])) {
    if (!empty($_GET['numero1'])) { //IF{Se diferente de vazio, armazeno a informação em uma variável} ELSE {senão diga essa mensagem]
        $numero1 = $_GET['numero1'];
    } else {
        $mensagem = "Número 1 Vazio";
    }
    if (!empty($_GET['numero2'])) {
        $numero2 = $_GET['numero2'];
    } else {
        $mensagem = "Número 2 Vazio";
    }}
    
    if(!empty($numero1) && !empty($numero2)){
    $calculo = $numero1 + $numero2;
    if ($calculo > 20) {
        $calculo = $calculo + 8;
    } else {
        $calculo = $calculo - 5;
    }
    $mensagem = "o valor é $calculo";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Desafio 01</title>
</head>

<body>
    <h1>Desafio 01</h1>

    <form action="" method="GET">
        <label for="numero1">Número1:</label>
        <input type="text" name="numero1" value= <?php echo $numero1?>>

        <label for="numero2">Número2:</label>
        <input type="text" name="numero2" value= <?php echo $numero2?>>

        <input type="submit" value="Enviar" name="enviar">

        <br>
        <span>
            <h2><?php echo $mensagem ?></h2>
        </span>
    </form>
</body>

</html>




