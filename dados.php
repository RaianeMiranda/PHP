<?php
$Nome = "Raiane Miranda";
$Idade = "16 Anos";
$Bairro = "Atiradores";
$Cidade = "Joinville";
$Mesada = 200;
$Altura = 1.57
?>


<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Teste-dados</title>
</head>

<body>
    <h1 style="color:blue">Dados</h1>
    <h2>
        <!-- 1º Modo de saída -->
        <?php echo
            "<h2 style='color:blue'>" .
                "Nome: "   . $Nome . "<br>" .
                "Idade: "  . $Idade . "<br> " .
                "Bairro: " . $Bairro . " <br>" .
                "Cidade: " . $Cidade . "<br>" .
                "Mesada: " . $Mesada . "<br>" .
                "Altura: " . $Altura . "</h2>";
        ?></h2>

    <!-- 2º Modo de saída -->
    <?php echo
        "<h2 style='color:pink'>" .
            "Nome:     $Nome  <br>
            Idade:    $Idade  <br> 
            Bairro:   $Bairro   <br>
            Cidade:   $Cidade  <br>
            Mesada:   $Mesada  <br>
            Altura:   $Altura  </h2>";
    ?></h2>

    <!-- 3º Modo de saída -->
    <?php
    echo "<h2 style='color:gray'>";
    echo "Nome:"   . $Nome   .  "<br>";
    echo "Idade:"  . $Idade  .  "<br>";
    echo "Bairro:" . $Bairro .  "<br>";
    echo "Cidade:" . $Cidade .  "<br>";
    echo "Mesada:" . $Mesada .  "<br>";
    echo "Altura:" . $Altura .  "</h2>";
    ?></h2>


</body>

</html>