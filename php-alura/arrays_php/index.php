<?php

namespace Alura;

require 'autoload.php';

/*
$correntistas = [
    'Giovanni',
    'João',
    'Maria',
    'Luis',
    'Luisa',
    'Rafael'
];

$correntistasNaoPagantes = [
    'Luis',
    'Luisa',
    'Rafael'
];

$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);

echo "<pre>";
var_dump($correntistasPagantes);
echo "</pre>";
*/

$correntistas = [
    'Giovanni',
    'João',
    'Maria',
    'Luis',
    'Luisa',
    'Rafael'
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];


$array_associativo = [
    "Giovanni" => 2500,
    "João" => 3000,
    "Maria" => 4000
];

$relacionados = array_combine($correntistas, $saldos);


$relacionados["Matheus"] = 4500;

#echo "O saldo do Giovanni é: {$relacionados["Giovanni"]}" . PHP_EOL;

if (array_key_exists("João",$relacionados)) {
    echo "O saldo do João é: {$relacionados["João"]}";
} else {
    echo "Chave não encontrada.";
}

$mariores = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);

echo "<pre>";
var_dump($maiores);
echo "</pre>";

/*
Fatal error: Uncaught Error: Call to undefined method Alura\ArrayUtils::encontrarPessoasComSaldoMaior() 
in E:\GitHub\meus-estudos\php-alura\arrays_php\index.php:68 Stack trace: #0 {main} thrown 
in E:\GitHub\meus-estudos\php-alura\arrays_php\index.php on line 68
*/

#Não sei o que deu :(