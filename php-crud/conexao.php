<?php
    $server = "localhost";
    $user = "root";
    $pass = "W1lmZtMWnDwhk3rf";
    $bd = "crud";

    // verificação de conexão com o banco de dados
    if($conn = mysqli_connect($server, $user, $pass, $bd)) {
        // echo "Conectado.";
    } else {
        echo "Não conectado.";
    }

    function mensagem($texto, $tipo) {
        echo "<div class='alert alert-$tipo' role='alert'>$texto</div>";
    }