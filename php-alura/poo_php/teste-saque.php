<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Calleb Bezerra',
        new Endereco('Salgueiro', 'N. Sra das Graças', 'Maria Adelaide Leitinho', 44)
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();