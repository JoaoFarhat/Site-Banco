<?php
    //inicia a sessão
    session_start();

    //caso não exista uma sessão com cpf e com senha, retorna para a tela de login  e destrói qualquer dado
    if(!isset($_SESSION['cpf']) == true && !isset($_SESSION['senha']) == true){
        unset($_SESSION['cpf']);
        unset($_SESSION['senha']);
        header('Location: login.html');
    }
    //mantém a sessão com o cpf
        $logado = $_SESSION['cpf'];

?>

<!--Cabeçalho-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">   
    <link rel="stylesheet" href="css/site.css">
    <title>SS Bank's</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!--Div do menu-->
    <div class="menu">
        <ul>
            <li class="lista ativa">
                <b></b>
                <b></b>
                <a href="site.php">
                    <span class="icone"><i class='bx bx-home' ></i></span>
                    <span class="titulo">Home</span>
                </a>
            </li>
            <li class="lista">
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

    <!--Div do botão de alternar menu-->
    <div class="alternar">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
    </div>

    <!--div do primeiro conteúdo-->
    <div class="container">
        <!--div que guarda o conteúdo-->
        <div class="box">
            <!--div do conteúdo-->
            <div class="conteudo">
                <!--div do icone-->
                <div class="icone">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
                <!--div do texto-->
                <div class="texto">
                    <h3>Depósito</h3>
                    <p>Caso precise de dinheiro na sua conta, entre e faça um depósito e o dinheiro estará na sua carteira
                        em questão de segundos.
                    </p>
                    <a href="deposito.php">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>

    <!--div do primeiro conteúdo-->
    <div class="container">
        <!--div que guarda o conteúdo-->
        <div class="box">
            <!--div do conteúdo-->
            <div class="conteudo">
                <!--div do icone-->
                <div class="icone">
                    <ion-icon name="swap-horizontal-outline"></ion-icon>
                </div>
                <!--div do texto-->
                <div class="texto">
                    <h3>Transferência</h3>
                    <p>Precisa enviar dinheiro para um amigo? Entre aqui e faça sua transferência podendo 
                        ser do tipo PIX, TED, ou até transferência bancária.
                    </p>
                    <a href="transferencia.php">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>
    <!--div do primeiro conteúdo-->
    <div class="container">
        <!--div que guarda o conteúdo-->
        <div class="box">
            <!--div do conteúdo-->
            <div class="conteudo">
                <!--div do icone-->
                <div class="icone">
                    <ion-icon name="wallet-outline"></ion-icon>
                </div>
                <div class="texto">
                    <!--div do texto-->
                    <h3>Saldo</h3>
                    <p>Aqui você pode checar o quanto de dinheiro você ainda possui na sua conta.
                    </p>
                    <a href="saldo.php">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>
</body>

<!--import do JavaScript e dos ícones-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js/site.js"></script>
    
</html>