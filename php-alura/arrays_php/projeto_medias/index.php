<?php

$notas = [9, 3, 10, 5, 10, 8];

echo "<p>A nota de Português é: $notas[0]</p>";
echo "<p>A nota de Matemática é: $notas[1]</p>";
echo "<p>A nota de Geografia é: $notas[2]</p>";
echo "<p>A nota de História é: $notas[3]</p>";
echo "<p>A nota de Química é: $notas[4]</p>";
echo "<p>A nota de Artes é: $notas[5]</p>";

$quantidadeNotas = sizeof($notas);

$soma = 0;

for($i = 0; $i < $quantidadeNotas; $i++) {
    $soma = $soma + $notas[$i];
}

$media = $soma / $quantidadeNotas;

echo "A média é: $media";