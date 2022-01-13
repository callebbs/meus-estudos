<?php

class Titular
{
    private CPF $cpf;
    private $nome;
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->CPF = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    private function validaNomeTitular(string $nomeTitular): void
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres.";
            exit();
        }
    }

    public function recuperaCpf(): string
    {
        return $this -> CPF -> recuperaNumero();
    }

    public function recuperaNome(): string
    {
        return $this -> nome;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}