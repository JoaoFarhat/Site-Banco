<?php

    $dbHost = 'localhost:3306';
    $dbUsername = 'root';
    $dbPassword = 'P@$$w0rd';
    $dbName = 'Banco_pi';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conexao -> connect_errno){
        echo "Erro";
    } else {
        echo "Conexão Efetuada com sucesso";
    }

?>