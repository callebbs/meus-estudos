<?php

spl_autoload_register(function (string $nomeCompletoDaClase)
{
    // Alura/Modelo/Endereco;
    // src
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClase);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $nomeCompletoDaClase);
    $caminhoArquivo .= '.php';

    if(file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});