<?php

    //recebe nas variaveis as informações do banco
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'Jonhjones3004@';
    $dbName = 'banco_cadastro';

    //cria uma conexão com o banco de dados
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

?>