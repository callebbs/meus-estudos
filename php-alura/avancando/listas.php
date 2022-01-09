<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];
$umaIdade = $idadeList[0];

//Remove um índice do array
unset($idadeList[4]);

echo $umaIdade;

// Para adicionar um item no último índice, basta informar o valor:
    // Exemplo:

$idadeList[] = 20;

// Recebe os elementos de acordo com a sequência de índices
list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}