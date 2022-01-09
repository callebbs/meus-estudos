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
        'titular' => "Flavia",
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
$contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], 900);

// Função para colocar o titular da conta em MAIÚSCULO
titularComLetraMaiuscula($contasCorrentes["123.456.789-12"]);
titularComLetraMaiuscula($contasCorrentes["123.4567.89-11"]);

// Remove um índice
unset($contasCorrentes['123.456.789-10']);

/* foreach ($contasCorrentes as $cpf => $conta) {
    // list('titular' => $titular, 'saldo' => $saldo) = $conta;
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    
    exibeMensagem(
        // "$cpf {$conta['titular']} {$conta['saldo']}"
        "$cpf $titular $saldo"
    );
} */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt><h3> <?= $conta['titular']; ?> - <?= $cpf; ?> </h3></dt>
        <dd> <?= $conta['saldo']; ?> </dd>
        <?php } ?>
    </dl>
    
</body>
</html>