<?php

$mysql = new mysqli('localhost', 'root', '', 'blog');
#$mysql->set_charset("UTF-8");

if($mysql == FALSE) {
    echo "Banco não conectado.";
}