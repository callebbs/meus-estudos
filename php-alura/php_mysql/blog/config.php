<?php

$mysql = new mysqli('localhost', 'root', '', 'blog');
#$mysql->set_charset("UTF-8");

if($mysql == TRUE) {
    echo "Banco conectado.";
} else {
    echo "Erro na conexão.";
}