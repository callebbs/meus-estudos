<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Calleb Bezerra');
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo "Saldo da conta: " . $primeiraConta->recuperaSaldo() . PHP_EOL;

echo '----------------------------------------------------' . PHP_EOL;
$segundaConta = new Conta('123.456.789-11', 'Flavia Lucas');
echo $segundaConta->recuperaNomeTitular() . PHP_EOL;
echo $segundaConta->recuperaCpfTitular() . PHP_EOL;
echo $segundaConta->deposita(5000);
echo "Saldo da conta: " . $segundaConta->recuperaSaldo() . PHP_EOL;

$terceiraConta = new Conta('123.456.789-12', 'Ana Maria');

echo '----------------------------------------------------' . PHP_EOL;
echo "Número de contas: " . Conta::recuperaNumeroDeContas();
