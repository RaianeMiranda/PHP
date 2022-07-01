<?php
/*Crie um script de um game. 
    O PHP vai gerar um número entre 1 e 10, 
    e você vai ficar tentando adivinhar 
    que número foi esse.
    Se acertar, diz que acertou e mostra o número.
    Se errar, diz que errou, e mostra o número sorteado.
    */
$numero = 0;
$adivinha = 0; // numero sorteadp
$tentativa = 0;
$mensagem = "";

if (isset($_POST['enviar'])) {
    if (isset($_POST['inicia'])) {
        $adivinha = rand(1, 100);
    } else {
        $adivinha = $_POST['adivinha'];
        $tentativa = $_POST['tentativa'];
    }

    if (!empty($_POST['numero'])) {
        $numero = $_POST['numero'];
        $tentativa++;
        if ($numero == $adivinha) {
            $mensagem = "Você acertou. Numero de tentativas: $tentativa";
        } else {
            if ($numero < $adivinha)
                $mensagem = "O número é maior que $numero!! Numero tentativas: $tentativa";
            else
                $mensagem = "O número é menor que $numero!! Numero tentativas: $tentativa";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Adivinhar</title>
</head>

<body>
    <h1>Super Game Numero Aleatório 2.0</h1>
    <form action="" method="POST">
        <label for="">Numero: </label>
        <input type="text" name="numero" value=<?php echo $numero ?>><br>
        <input type="hidden" name="adivinha" value=<?php echo $adivinha ?>> <!--o elemento hidden serve para esconder um componente, mas guardar o valor dele -->
        <input type="hidden" name="tentativa" value=<?php echo $tentativa ?>>
        <input type="checkbox" name="inicia">Novo número aleatório<br>
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <span><?php echo $mensagem ?></span>
</body>

</html>