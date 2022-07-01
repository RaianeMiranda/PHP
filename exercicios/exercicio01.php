<?php
/*
Faça um programa que receba uma idade e diga se ele é criança ( <= 12 ), Adolescente (idade > 12 e idade <= 17), adulto (idade > 17 e idade < 60) ou idoso (idade < 60);
*/

$idade = -430;

if ($idade >= 0 && $idade <= 12){
    echo "Você é uma criança!";
} else if($idade > 12 && $idade <= 17){
    echo "Você é um adolescente!!";
} else if($idade > 17 && $idade < 60){
    echo "Você é um adulto!!!";
} else if($idade >= 60){
    echo "Você é um idoso!!!!";
} else {
    echo "Valor invalido ou negativo!";
}

?>