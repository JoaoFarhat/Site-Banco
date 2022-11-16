<?php
    session_start();
    //print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha'])){
        include_once('config.php');
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];

        /*
        print_r('CPF: ' . $cpf);
        print_r('<br>');
        print_r('Senha: ' . $nome);
        print_r('<br>');
        */


        $sql = "SELECT * FROM clientes WHERE CPF = '$cpf' and senha = '$senha'";
        
        $result = $conexao->query($sql);


        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['cpf']);
            unset($_SESSION['senha']);
            header('Location: login.html');

        } else {
            $_SESSION['cpf'] = $cpf;
            $_SESSION['senha'] = $senha;

            header('Location: site.php');
        }

    } else {
        header('Location: login.html');
    }

?>