<div class="titulo">Operações Aritméticas</div>

<?php

echo 1 + 1, '<br>';
var_dump(1+1);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>'; // Resultado em float
echo intdiv(7, 4), '<br>'; // Resultado em inteiro
echo round(7 / 4), '<br>'; // função round aredonda o resultado
echo 7 % 4, '<br>'; // Módulo da divisão
echo 7 % 2, '<br>';
echo 8 % 2, '<br>';
echo 7 / 0, '<br>';
// echo intdiv(7, 0), '<br>'; #Gera um erro!
echo 4 ** 2, '<br>';

// Precedência dos operadores:
// () => ** => / * % => + -

echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4 ) ** 2;