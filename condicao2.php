<?php
//Estrutura de decisão usando switch-case
$numero = 5;

/* o switch é como: caso esse número seja esse, mostre/faça isso, o break faz com que ele termine a ação */
switch ($numero) {
    case 5 : echo "O número é igual a 5"; break;
    case 4 : echo "O número é igual a 4"; break;
    case 3 : echo "O número é igual a 3"; break;
    case 2 : echo "O número é igual a 2"; break;
    case 1 : echo "O número é igual a 1"; break;
    default : echo "Não sei qual é o número";break;
}


/* 
if ($numero == 5){
    echo "o número é igual a 5";
} else if ($numero == 4){
    echo "o número é igual a 4";
} else if ($numero == 3){
    echo "o número é igual a 3";
} else if  ($numero == 2){
    echo "o número é igual a 2";
} else {
    echo "Não sei qual é o número";
}
*/



?>