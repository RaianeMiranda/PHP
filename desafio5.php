<?php
$num1 = rand(0, 10);
$num2 = "";
$tentativa= "";
if (isset($_GET["enviar"])) {
    if (!empty($_GET['num'])) {
        $num2 = $_GET['num'];
if(isset($_GET['enviar'])){
    $tentativa= $_GET['enviar']; echo "Número de tentativas: $tentativas";

}if ($num1 == $num2) {
            $mensagem = "Acertou o número" . "<br>";
        } else $mensagem = "Tente novamente"."<br>"."O número era: ".$num1;
    }
}
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>Super game Número Aleatório 1.0</h1>
    <form action="" method="GET">
        <label for="numero">Insira um número de 1 a 10</label>
        <input id="numero" type="number" name="num" placeholder="Número de 1 a 10" value=<?php echo $num2 ?>>
        <br>
        <input id="tentativa" type="checkbox" name="tentativas">
        <label for="tentativa">Gerar um novo número aleatório</label>
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <span><?php echo $mensagem ?></span>
</body>

</html>