<?php

$idade = 21;
$nome = 'Calleb';

echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade > 18 and $nome == 'Calleb') {
    echo "Você tem $idade anos. Pode entrar.";
} else {
    echo "Você não tem mais de 18 anos.";
}