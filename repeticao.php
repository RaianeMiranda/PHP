<?php

//Estrutura de repetição

//While
$controle=0;

while($controle <=4){
    echo "estou repetindo a mensagem: $controle <br>";
$controle = $controle +1;
}

echo "Valor da variavel final: $controle<br><br>";


//Tabuada de 5
$tabuada=1;

while($tabuada <=10){
    echo "5 x $tabuada = ".($tabuada*5). "<br>";
$tabuada = $tabuada + 1;
}

echo "Valor da variavel final: $tabuada <br><br>";

//do-While
$tabuada1 = 1;
do {
    echo "5 x $tabuada1 = ".($tabuada1*5). "<br>";
$tabuada1 = $tabuada1 + 1;
} while($tabuada1 <=5) ;


/*Qual a diferença do while para o do-while?

*/

//for
for ($controle =1; $controle<=5; $controle= $controle ++){
    echo "5 x $controle = ".($controle*5). "<br>";

}


?>