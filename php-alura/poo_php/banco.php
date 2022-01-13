<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Endereco.php';
require_once 'src/CPF.php';


$endereco = new Endereco('Salgueiro', 'Nossa Senhora das Graças', 'Maria Adelaide Leitinho', '44');
$calleb = new Titular(new CPF('123.456.789-10'), 'Calleb Bezerra', $endereco);
$primeiraConta = new Conta($calleb);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$flavia = new Titular(new CPF('698.549.548-10'), 'Flávia', $endereco);
$segundaConta = new Conta($flavia);
var_dump($segundaConta);

$outroEndereco =  new Endereco('A', 'B', 'C', 'D');
$outra = new Conta(new Titular(new CPF('123.456.789-12'), 'Abcdefg',  $outroEndereco));
echo Conta::recuperaNumeroDeContas();