<?php

    if(isset($_POST['submit'])){

        include_once('config.php');

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $data_nascimento = $_POST['data-nascimento'];
        $senha = $_POST['senha'];
        $saldo = "0.00";

        $result = mysqli_query($conexao, "INSERT INTO clientes(nome_completo, CPF, email, endereco, data_nascimento, senha, saldo) 
        VALUES('$nome', '$cpf', '$email', '$endereco', '$data_nascimento', '$senha', '$saldo')");

        header('Location: login.html');
    }


?>