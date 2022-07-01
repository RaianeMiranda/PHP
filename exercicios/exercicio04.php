<?php
/*
Faça um Programa que peça o raio de um círculo, calcule e mostre sua área.
*/
$raio= 4;
$pi=3.14;
$area1= $pi*($raio*$raio);
echo "Valor da área de um círculo é: $area1 <br>";
/*Testando a função de pi */
echo "Valor de PI: ".pi()."<br>";
/*Testando a função de pi dentro de um processamento */
$area2= pi()*($raio*$raio);
echo "Valor da área de um círculo é: $area2 <br>";

/* $raio^2=pow($raio,2)*/
$area3= pi()* pow($raio, 2);
echo "Valor da área de um círculo é: $area3 <br>";

echo"<br> <br> <br>";

/* Faça um Programa que calcule e mostre a área de um quadrado. */
$Lados=2;
$areasquare=pow($Lados, 2);
echo "Valor da área de um quadrado é: $areasquare <br>";

$areasquare2=$Lados*$Lados;
echo "Valor da área de um quadrado é: $areasquare2 <br>";


?>