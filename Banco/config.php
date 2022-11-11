<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'Jonhjones3004@';
    $dbName = 'Banco';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conexao -> connect_errno){
        echo "Erro";
    } else {
        echo "Conexão Efetuada com sucesso";
    }
?>