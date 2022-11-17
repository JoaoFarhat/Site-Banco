<?php
    //Inicia a sessão
    session_start();

    //inclui o banco
    include_once('config.php');

    //caso a pessoa não esteja logada, será retornada para a tela de login
    if(!isset($_SESSION['cpf']) == true && !isset($_SESSION['senha']) == true){
        unset($_SESSION['cpf']);
        unset($_SESSION['senha']);
        header('Location: login.html');
    }
        //pega o cpf informado no login
        $logado = $_SESSION['cpf'];
        
?>
<!--Cabeçalho-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">   
    <link rel="stylesheet" href="css/deposito.css">
    <title>SS Bank's</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!--Div onde se encontra o menu-->
    <div class="menu">
        <ul>
            <li class="lista">
                <b></b>
                <b></b>
                <a href="site.php">
                    <span class="icone"><i class='bx bx-home' ></i></span>
                    <span class="titulo">Home</span>
                </a>
            </li>
            <li class="lista ativa">
                <b></b>
                <b></b>
                <a href="deposito.php">
                    <span class="icone"><i class='bx bx-money' ></i></span>
                    <span class="titulo">Depósito</span>
                </a>
            </li>
            <li class="lista">
                <b></b>
                <b></b>
                <a href="transferencia.php">
                    <span class="icone"><i class='bx bx-transfer' ></i></span>
                    <span class="titulo">Transferência</span>
                </a>
            </li>
            <li class="lista">
                <b></b>
                <b></b>
                <a href="saldo.php">
                    <span class="icone"><i class='bx bxs-wallet' ></i></span>
                    <span class="titulo">Saldo</span>
                </a>
            </li>
            <li class="lista">
                <b></b>
                <b></b>
                <a href="conta.php">
                    <span class="icone"><i class='bx bx-user' ></i></span>
                    <span class="titulo">Perfil</span>
                </a>
            </li>
            <li class="lista">
                <b></b>
                <b></b>
                <a href="logout.php">
                    <span class="icone"><i class='bx bx-log-out' ></i></span>
                    <span class="titulo">Sair</span>
                </a>
            </li>
        </ul>
    </div>

    <!--div onde se encontra o botão para alternar entre os menus-->
    <div class="alternar">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
    </div>
</body>

<!--Div principal da transferencia-->
<div class="main-transferencia">
    <!--Div da esquerda do formulário de deposito-->
    <div class="left-deposito">
        <div class="card-cadastro">
            <h1>Depósito</h1>  
            <div class="textfield-1">
                <form action="depositar.php" method="POST">
                <label for="CPF">CPF</label>
                <input type="text" name="cpf" placeholder="Insira seu CPF">
                <label for="saldo">Saldo</label>
                <input type="number" name="saldo" placeholder="Insira a Quantidade">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Insira sua Senha">
            </div>
            <input type="submit" name="submit" class="button-cadastro" value="Depositar">         
        </form>
        </div>          
    </div>
    <!--Div da direita do formulário de transferencia-->
    <div class="right-cadastro">
        <div class="card-cadastro">
            <h1>Transferência</h1>
            <div class="textfield-1">
                <form action="transferir.php" method="POST">
                <label for="nome">CPF</label>
                <input type="text" name="cpf" placeholder="Insira o CPF da Pessoa">
                <label for="saldo">Saldo</label>
                <input type="number" name="saldo" placeholder="Insira a Quantidade">
                    <div class="textfield-tipo">
                    <label for="pix">Tipo de Transferência</label>
                        <input type="radio" id="pix" name="tipo" value="PIX">
                        <label for = "pix">PIX</label>
                        <input type="radio" id="ted" name="tipo" value="TED">
                        <label for = "ted">TED</label>
                        <input type="radio" id="bancaria" name="tipo" value="Bancaria">
                        <label for = "banco">Bancaria</label>
                    </div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Insira sua Senha">
                </div>
            <input type="submit" name="submit" class="button-cadastro" value="TRANSFERIR">    
        </form>
        </div>
    </div>

    <!--Importa tanto os ícones quanto o JavaScript do botão do menu-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js/site.js"></script>

</html>