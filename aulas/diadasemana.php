<?php 
include "functions.php";

$numero = 0;
$msg=="";
if(isset ($_GET)){
    $numero = $_GET['numero'];
    $msg= semana($num1);
}



?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Dia da semana</title>
</head>
<body>
    <form action="">
    Número <input type="text" name="numero">
<input type="submit" value="Dia da semana" name="enviar">    
    </form>
    <span><?php echo $msg?></span>
</body>
</html>