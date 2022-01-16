<?php

use Alura\Banco\Model\{CPF, Funcionario};
use Alura\Banco\Service\ControladorDeBonificacoes;

require_once 'autoload.php';

$umFuncionario = new Funcionario('Calleb Bezerra', '123.456.789-10', 'Desenvolvedor', 1000);
$umaFuncionaria   = new Funcionario('Flávia Lucas', '123.456.789-11', 'Gestora', 3000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal;