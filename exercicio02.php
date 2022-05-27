<?php
/*
Desnvolva um programa que peça 2 notas,
 calcule a média e verfifique se
  a média >= 7 - o aluno passou 
  a (media < 7 e media >=5) - aluno em recuperação 
  a (mesdia <5) - aluno reprovado
  */
$num1 = 10;
$num2 =5;
$media= ($num1+$num2)/2;

if ($media >=7){
    echo "Você passou!";
}else if ($media <7 && $media>=5){
   echo "Você está em recuperação";
}else if ($media <5){
    echo "Você reprovou!";
}

  ?>