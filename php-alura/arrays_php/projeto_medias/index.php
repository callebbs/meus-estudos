<?php

require 'Calculadora.php';

$notas = [9, 5, 10, 10];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if($media) {
    echo "A media é: $media";
} else {
    echo "Não foi possível calcular a média.";
}