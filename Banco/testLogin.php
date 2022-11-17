<?php
    session_start();
    //print_r($_REQUEST);

    //só roda o código se o usuário clicar em submit e nenhum campo estiver vazio
    if(isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha'])){

        //inclui o banco dados e captura as informações do formulário 
        include_once('config.php');
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];

        //faz o código no banco checando se existe algum cliente com o cpf e a senha informadas
        $sql = "SELECT * FROM clientes WHERE CPF = '$cpf' and senha = MD5('$senha')";
        
        //roda o código no banco e retorna a resposta
        $result = $conexao->query($sql);

        //se não retornar resultados ele retira os registros informados e retorna para a tela de Login
        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['cpf']);
            unset($_SESSION['senha']);
            header('Location: login.html');

        // se obter resultados joga o usuário no site
        } else {
            $_SESSION['cpf'] = $cpf;
            $_SESSION['senha'] = $senha;

            header('Location: site.php');
        }

    //caso algum das 3 petições forem falsas, retorna o usuário para a pagina de login
    } else {
        header('Location: login.html');
    }

?>