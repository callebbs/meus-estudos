<?php

//Arrays Associativos

$conta1 = [
    'titular' => "Vinicius",
    'saldo' => 1000
];

$conta2 = [
    'titular' => "Flávia",
    'saldo' => 2000
];

$conta3 = [
    'titular' => "Calleb",
    'saldo' => 2000
];

$contasCorrentes = [$conta1, $conta2, $conta3];


//echo $conta1['titular'];

//echo $contasCorrentes[2]['titular'];

for($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}