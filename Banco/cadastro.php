<?php
    //Apenas rodará o código se a pessoa inserir os campos e clicar em "cadastro"
    if(isset($_POST['submit'])){

    //inclui a conexão com o banco
        include_once('config.php');
        
    //captura todas as informações colocadas no formulário
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $data_nascimento = $_POST['data-nascimento'];
        $senha = $_POST['senha'];
        $saldo = "0.00";
    
        //faz a inserção das informações do cadastro no banco de dados
        $result = mysqli_query($conexao, 
        "INSERT INTO clientes(nome_completo, CPF, email, endereco, data_nascimento, senha, saldo) 
        VALUES('$nome', '$cpf', '$email', '$endereco', '$data_nascimento', MD5('$senha'), '$saldo')");

        //após o cadastro retorna o usuário para a tela de login
        header('Location: login.html');
    }


?>