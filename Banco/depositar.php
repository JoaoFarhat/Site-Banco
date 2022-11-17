<?php

    //só permitirá o deposito se nenhum campo estiver vazio e o usuário clicar no botão
    if(isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha'])){

        //inclui o banco de dados
        include_once('config.php');

        //pega as informações do formulário e coloca em variáveis 
        $cpf = $_POST['cpf'];
        $saldo = $_POST['saldo'];
        $senha = $_POST['senha'];

        //armazena o código do banco de dados
        $sql = ("UPDATE clientes SET saldo = (saldo + '$saldo') WHERE CPF = '$cpf' and senha = MD5('$senha')");
        
        //executa o código do banco de dados
        $result = $conexao->query($sql);

        //joga o usuário para o site principal
        header('Location: site.php');
 
        // caso algum campo estiver vazio retornará o usuário para a pagina de transferencia
    } else {
        header('Location: transferencia.html');
    }

?>  