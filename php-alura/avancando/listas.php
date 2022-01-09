<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];
$umaIdade = $idadeList[0];

echo $umaIdade;

// Para adicionar um item no último índice, basta informar o valor:
    // Exemplo:

$idadeList[] = 20;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}