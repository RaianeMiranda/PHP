<?php
/*.Faça um Programa que peça 2 números inteiros e um número real. 
Calcule emostre:oo produto do dobro do primeiro com metade do segundo 
.oa soma do triplo do primeiro com o terceiro.oo 
terceiro elevado ao cubo. */

$num1=10;
$num2=5;
$num3=10.5;

$metade= ($num1*2) + ($num2/2);

$triplo= ($num1*3) + $num3;

$terceiro= pow($num3, 3);

echo "O valor da primeira operação é:$metade <br>";
echo "O valor da segunda operação é:$triplo <br>";
echo "O valor da terceira operação é:$terceiro <br>";
?>