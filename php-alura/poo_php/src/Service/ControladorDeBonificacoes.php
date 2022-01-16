<?php

namespace Alura\Banco\Service;



class ControladorDeBonificacoes {

    private $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario) 
    {
        $this->totaldeBonificacoes += $funcionario->calcularBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}