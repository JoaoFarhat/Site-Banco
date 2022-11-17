<?php
    //iniciar sessão
    session_start();

    //destrói todos os registros da sessão que estava
    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);

    //redireciona para a pagina de login
    header('Location: login.html');
?>