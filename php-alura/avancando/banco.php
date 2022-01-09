<?php

// include 'funcoes.php';
// require 'funcoes.php';

require_once 'funcoes.php';

$contasCorrentes = [
    "123.456.789-10" => [
        'titular' => "Vinicius",
        'saldo' => 1000
    ],
    "123.4567.89-11" => [
        'titular' => "Flávia",
        'saldo' => 300
    ], 
    "123.456.789-12" => [
        'titular' => "Calleb",
        'saldo' => 2000
    ]
];

// Sacando
$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes["123.4567.89-11"] = sacar($contasCorrentes["123.4567.89-11"], 100);

// Depositando
$contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], -100);


// Exibindo o saldo das contas
exibeMensagem("Saldo das contas:");
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}

