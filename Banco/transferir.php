<?php

    //inicia a sessão
    session_start();

    //se o usuário clicou em transferir e nenhum campo esteja vazio
    if(isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha'])){
        //inclui o banco
        include_once('config.php');

        //guarda as informações do formulário em variáveis
        $cpf_dest = $_POST['cpf'];
        $cpf_remet = $_SESSION['cpf'];
        $tipo = $_POST['tipo'];
        $saldo = $_POST['saldo'];
        $senha = $_POST['senha'];

        //guarda o código do banco de dados perguntando se existe registros com os dois cpf's
        $sql = "SELECT * FROM clientes WHERE CPF = '$cpf_dest' OR CPF = '$cpf_remet'";

        //roda o código no banco
        $result = $conexao->query($sql);

        //caso o numero de resultados retornados seja menor que 2
        if(mysqli_num_rows($result) < 2){

            //retorna para a pagina de transferencia
            header('Location : transferencia.php');

        //caso o numero de resultados retornados seja igual a 2
        } else {

            //guarda o código do banco de dados perguntando se o saldo do remetente é maior que 0
            $sql1 = "SELECT * FROM clientes WHERE CPF = '$cpf_remet' and saldo > 0";
            //roda o código no banco
            $result1 = $conexao->query($sql1);

            //caso o numero de resultados do código acima for maior que 0, roda o código abaixo
            if(mysqli_num_rows($result1) > 0){

            //insere uma nova transferencia na tabela transferencia
            $result1 = mysqli_query($conexao, "INSERT INTO transferencia 
            (qnt, tipo_transf,fk_cpf_dest,fk_cpf_remet) 
            VALUES ('$saldo', '$tipo', '$cpf_dest', '$cpf_remet')");

            /*atualiza o saldo do usuário que recebeu a transferência, aumentando para o valor da transferencia
            mais o valor que ele já possuía*/
            $sql2 = ("UPDATE clientes SET saldo = (saldo + '$saldo') WHERE CPF = '$cpf_dest'"); 

            //roda o código acima no banco de dados
            $result2 = $conexao->query($sql2);

            /*atualiza o saldo do usuário que enviou a transferência, diminuindo para o valor da transferencia
            menos o valor que ele jpa possuía*/ 
            $sql3 = ("UPDATE clientes SET saldo = (saldo - '$saldo') WHERE CPF = '$cpf_remet'"); 

            //roda o código acima no banco de dados
            $result2 = $conexao->query($sql3);

            //envia o usuário para a pagina principal do site
            header('Location: site.php');

            //caso o numero de resultados do if seja menor ou igual a 0, envia o usuário para a mesma tela
            } else {
                //faz com que envie o usuário para a tela de transferência
                header('Location:transferencia.php');
            }          
        }
    }
?>