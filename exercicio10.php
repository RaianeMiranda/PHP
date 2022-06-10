<?php
/* Elabore uma aplicação em PHP que permita
ao usuário entrar com um número, calcular o seu
fatorial.
*/

$fatorial=5; //Quem eu vou fatorar
$controle=1; // o que vai controlar quantas vezes vai multiplicar
$valor=1;   //valor final, resultado da fatoração

for ($controle=1; $controle <=$fatorial; $controle++){
    echo "$fatorial! = $valor * $controle = ".($valor *$controle)."<br>"; 
    $valor= $valor* $controle;
    
}
echo "O fatorial de $fatorial! = $valor";

?>
<br>
<br>
<br>

<?php

// Escreva um algoritmo que imprima na tela todos os números ímpares até o 101.
/*
$con=1; 
while($con<=101){
echo $con. "<br>";
$con = $con + 2;
}

 $con=1;
    while ($con<=101){
        if ($con % 2 == 0)
        echo $con."<br>;
        $con++
    }
*/


//Escreva um algoritmo para imprimir na tela os números 29 ao 9.
/*$num=29; //número máximo
while($num>=9){ //condição= que o número seja maior ou igual a 9
echo $num. "<br>"; 
$num = $num -1 ; //número máximo menos 1, pode ser usado --
}
*/


//Utilizando o comando for, escreva um algoritmo que imprima na tela 9 vezes o seu nome

$nome= "ane";
while ($nome="ane"){

}

// Utilizando o comanando for, escreva um aloritmo que imprima todos os números pares até o 80

// (DESAFIO) Escreva um algoritmo em PHP que imprima na tela os números de 0 a 10, com exeção do 7.

// (DESAFIO) Faça um programa que receba um número e verifique se ele é par ou ímpar.

?>