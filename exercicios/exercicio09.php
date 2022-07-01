<?php
/* Tendo como dados de entrada a altura de uma pessoa, 
construa um algoritmo quecalcule seu peso ideal, 
usando a seguinte fórmula: (72.7*altura) – 58. 

Para homens: (72.7*h) - 58
Para mulheres: (62.1*h) - 44.7 
*/

$Altura= 1.62;

$PesoH=(72.7*$Altura)-58;

echo"O seu peso ideal é:$PesoH";

$PesoM=(62.1*$Altura)-44.7;

echo"O seu peso ideal é:$PesoM";
?>