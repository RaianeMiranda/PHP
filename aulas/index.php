<?php
$Nome = "Raiane";
$Sobrenome = "Miranda";
$idade = 43;
$Salario = 10.50;
$booleana = true;
echo $Nome . " " . $Sobrenome . "<br>";
echo $idade;
echo $Salario;
echo $booleana;
//Este é um comentário kjngfongoan
/*
Primeira linha
Segunda linha
sngiusngns
 echo "<h1>Olá Mundo!-Aluna Raiane Miranda </h1>";
 echo "<br>";
 print "<h2 style='color:red'>Olá estou usando print <h2>";
 */
?>

<!DOCTYPE html>

<head>
    <!-- Este é um comeentário em HTML-->
    <meta charset="UTF-8">
    <title>Página em PHP</title>
</head>

<body>
    <h1>Dentro do HTML
        <br>
        <?php
        $endereco = "Rua xv";
        echo "<h2 style='color:blue'>" . $Nome . " " . $Sobrenome . "<br>" . "</h2>";
        echo $endereco;
        /*echo "PHP dentro do HTML";*/
        ?>
    </h1>
</body>

</html>