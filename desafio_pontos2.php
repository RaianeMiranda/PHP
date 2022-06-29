<?php
$lado1 = "";
$lado2 = "";
$lado3 = "";

if (isset($_GET["calcular"])) {
    if (!empty($_GET['lado1'])) { //IF{Se diferente de vazio, armazeno a informação em uma variável} ELSE {senão diga essa mensagem]
        $lado1 = $_GET['lado1'];
    } else {
        $mensagem = "Lado 1 Vazio";
    }
    if (!empty($_GET['lado2'])) {
        $lado2 = $_GET['lado2'];
    } else {
        $mensagem = "Lado 2 Vazio";
    }
}
if (!empty($_GET['lado3'])) {
    $lado3 = $_GET['lado3'];
} else {
    $mensagem = " Lado 3 Vazio";
}

if (!empty($lado1) && !empty($lado2) && !empty($lado3)) { //Se nenhum formulario estiver vazio prossiga o calculo:
    if ($lado1 == $lado2 && $lado2 == $lado3 && $lado3 == $lado1) {
        $mensagem = "Triângulo Equilátero";
    } else if ($lado1 == $lado2 || $lado2 == $lado3 || $lado3 == $lado1) {
        $mensagem = "Triângulo Isoceles";
    } else ($mensagem = "Triângulo Escaleno");
}
echo $mensagem;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Desafio 02</title>
</head>

<body>
    <h1>Desafio 02</h1>

    <form action="" method="GET">
        <label for="lado1">Lado1:</label>
        <input type="text" name="lado1" value=<?php echo $lado1 ?>>

        <label for="lado2">Lado2:</label>
        <input type="text" name="lado2" value=<?php echo $lado2 ?>>

        <label for="lado3">Lado3:</label>
        <input type="text" name="lado3" value=<?php echo $lado3 ?>>

        <input type="submit" value="Calcular" name="calcular">

        <br>
        <span>
            <h2><?php echo $mensagem ?></h2>
        </span>
    </form>
</body>

</html>