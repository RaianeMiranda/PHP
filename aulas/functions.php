<?php
function soma($n1, $n2)
{ //dentro dos parenteses, você só identifica os parametros, dentro das chaves é que dissemos sua funcionalidade
    $soma = $n1 + $n2;
    echo "Adição: $soma" . "<br>";
}

function subtrair($n1, $n2)
{
    $subtrair = $n1 - $n2;
    echo "Subtração: $subtrair" . "<br>";
}

function dividir($n1, $n2)
{
    $dividir = $n1 / $n2;
    echo "Divisão: $dividir" . "<br>";
}

function multiplicar($n1, $n2)
{
    $multiplicar = $n1 * $n2;
    echo "Multiplicação: $multiplicar" . "<br>";
}
function resto($n1, $n2)
{
    $resto = $n1 % $n2;
    echo "Resto da divisão: $resto" . "<br>";
}

function triplo($num)
{
    $triplo = $num * 3;
    return $triplo;
}

function parimpar($num)
{
    if ($num % 2 == 0) {
        echo "Número par" . "<br>";
    } else echo "Número ímpar" . "<br>";
}

function echoparimpar($num)
{
    if ($num % 2 == 0) {
        return " Par" . "<br>";
    } else {
        return " Ímpar" . "<br>";
    }
}

function semana($num)
{
    if ($num == 1) {
        echo "Domingo";
    } else if ($num == 2) {
        echo "Segunda";
    } else if ($num == 3) {
        echo "Terça";
    } else if ($num == 4) {
        echo "Quarta";
    } else if ($num == 5) {
        echo "Quinta";
    } else if ($num == 6) {
        echo "Sexta";
    } else if ($num == 7) {
        echo "Sábado";
    } else echo "Número da semana inválido";
}
