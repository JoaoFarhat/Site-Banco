<?php

    session_start();

    if(isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha'])){
        include_once('config.php');

        $cpf_dest = $_POST['cpf'];
        $cpf_remet = $_SESSION['cpf'];
        $tipo = $_POST['tipo'];
        $saldo = $_POST['saldo'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM clientes WHERE CPF = '$cpf_dest' OR CPF = '$cpf_remet'";

        $result = $conexao->query($sql);

        //print_r($result);

        if(mysqli_num_rows($result) < 2){
            header('Location : transferencia.html');
        } else {
            $result1 = mysqli_query($conexao, "INSERT INTO transferencia (qnt, tipo_transf,fk_cpf_dest,fk_cpf_remet) VALUES ('$saldo', '$tipo', '$cpf_dest', '$cpf_remet')");

            $sql1 = ("UPDATE clientes SET saldo = (saldo + '$saldo') WHERE CPF = '$cpf_dest'"); 
            $result2 = $conexao->query($sql1);

            $sql2 = ("UPDATE clientes SET saldo = (saldo - '$saldo') WHERE CPF = '$cpf_remet'"); 
            $result2 = $conexao->query($sql2);

            header('Location: site.php');
            
        }
    }
?>