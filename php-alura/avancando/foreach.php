<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => "Vinicius",
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => "Flávia",
        'saldo' => 2000
    ], 
    12345678912 => [
        'titular' => "Calleb",
        'saldo' => 2000
    ]
];

foreach($contasCorrentes as $cpf => $conta) {
    echo "Cliente: " . $conta['titular'] . " - CPF: " . $cpf . " - Saldo: " . $conta['saldo'] . PHP_EOL;
}

