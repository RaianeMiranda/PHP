<?php
// Escreva um algoritmo que imprima na tela todos os números ímpares até o 101.

$con=1; 
while($con<=101){
echo $con. "<br>";
$con = $con + 2;
}

 $con=1;
    while ($con<=101){
        if ($con % 2 == 0)
        echo $con."<br>";
        $con++;
    }

?>