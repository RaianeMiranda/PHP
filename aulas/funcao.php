<?php
include "functions.php";

$num1 = 10;
$num2 = 20;
soma($num1, $num2);
subtrair($num1, $num2);
dividir($num1, $num2);
multiplicar($num1, $num2);
resto($num1, $num2);
soma(100, 900);
echo "Triplo: " . triplo(9) . "<br>"; //nesse estamos usando return

if (triplo(9) > 30) { // se o triplo de 9 (27) é maior que trinta execute: é maior
    echo "É maior" . "<br>";
} else { //senão execute: é menor
    echo "É menor" . "<br>";
}

parimpar(6);

$n1 = 89;
echo "O número $n1 é: " . echoparimpar($n1); //O echo faz parte do nome da função

$num=0;
$msg="";
if(isset($_GET['numero'])){
    $num = $_GET['numero'];
    $msg= "<br> O número $num é".echoparimpar($num); 
}

semana(1);

?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Par ou ímpar</title>
</head>

<body>
    <form action="" method="GET"> <!--Quando não colocamos o method o algoritmo automaticamente pega o GET -->
        número:<input type="text" name="numero">
        <input type="submit" value="verificar">
        <span><?php echo $msg ?></span>

    </form>
</body>

</html>