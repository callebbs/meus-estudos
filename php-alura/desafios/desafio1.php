<?php

/*
Desafio 01:

Imprimir na tela todos os números de 0 a 100, porém apenas os ímpares.
*/

for($i = 0; $i <= 100; $i++) {
   if($i % 2 != 0) {
       echo "#$i" . PHP_EOL;
   }
}