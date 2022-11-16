<?php
    session_start();
    //print_r($_SESSION);

    if(!isset($_SESSION['cpf']) == true && !isset($_SESSION['senha']) == true){
        unset($_SESSION['cpf']);
        unset($_SESSION['senha']);
        header('Location: login.html');
    }
        $logado = $_SESSION['cpf'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">   
    <link rel="stylesheet" href="css/site.css">
    <title>SS Bank's</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="menu">
        <ul>
            <li class="lista ativa">
                <b></b>
                <b></b>
                <a href="site.html">
                    <span class="icone"><i class='bx bx-home' ></i></span>
                    <span class="titulo">Home</span>
                </a>
            </li>
            <li class="lista">
                <b></b>
                <b></b>
                <a href="deposito.html">
                    <span class="icone"><i class='bx bx-money' ></i></span>
                    <span class="titulo">Depósito</span>
                </a>
            </li>
            <li class="lista">
                <b></b>
                <b></b>
                <a href="transferencia.html">
                    <span class="icone"><i class='bx bx-transfer' ></i></span>
                    <span class="titulo">Transferência</span>
                </a>
            </li>
            <li class="lista">
                <b></b>
                <b></b>
                <a href="#">
                    <span class="icone"><i class='bx bx-receipt'></i></span>
                    <span class="titulo">Extrato</span>
                </a>
            </li>
            <li class="lista">
                <b></b>
                <b></b>
                <a href="conta.php">
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

    <div class="alternar">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
    </div>

    <div class="container">
        <div class="box">
            <div class="conteudo">
                <div class="icone">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
                <div class="texto">
                    <h3>Depósito</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Dolores rem voluptatibus fugit facere!
                    </p>
                    <a href="deposito.html">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="box">
            <div class="conteudo">
                <div class="icone">
                    <ion-icon name="swap-horizontal-outline"></ion-icon>
                </div>
                <div class="texto">
                    <h3>Transferência</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Dolores rem voluptatibus fugit facere!
                    </p>
                    <a href="transferencia.html">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="box">
            <div class="conteudo">
                <div class="icone">
                    <ion-icon name="wallet-outline"></ion-icon>
                </div>
                <div class="texto">
                    <h3>Saldo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Dolores rem voluptatibus fugit facere!
                    </p>
                    <a href="conta.php">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>
</body>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js/site.js"></script>
    
</html>