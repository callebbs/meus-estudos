<?php

function exibeMensagem(string $mensagem) 
{
    echo $mensagem . '<br>';
}

function sacar(array $conta, float $valorASacar): array 
{
    if($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar): array 
{
    if($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Valor inválido!");
    }
    
    return $conta;
}

// & - recebendo a referência na memória e não uma cópia;


function titularComLetraMaiuscula(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta) 
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular $titular. Saldo: $saldo </li>";
}