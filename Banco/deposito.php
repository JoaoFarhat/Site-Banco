<?php

    if(isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha'])){

        include_once('config.php');

        $cpf = $_POST['cpf'];
        $saldo = $_POST['saldo'];
        $senha = $_POST['senha'];

        $sql = ("UPDATE clientes SET saldo = (saldo + '$saldo') WHERE CPF = '$cpf' and senha = '$senha'");
        
        $result = $conexao->query($sql);

        header('Location: site.php');
 
    } else {
        header('Location: transferencia.html');
    }

?>  