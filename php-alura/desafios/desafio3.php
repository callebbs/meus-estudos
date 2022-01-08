<?php

/*
Desafio 03:
Fazer o cálculo do IMC e informar a situação da pessoa: abaixo do peso, peso normal ou acima do peso ideal.
*/

$peso = 60;
$altura = 1.74;

$imc = $peso / ($altura * 2);

if($imc < 18.5) {
    echo "Você está abaixo do peso.";
} elseif ($imc < 25) {
    echo "Você está no seu peso normal";
} else {
    echo "Você está acima do peso ideal";
}