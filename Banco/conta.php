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

        //checa se o cpf existe no banco de dados 
        $sql = "SELECT * FROM clientes WHERE CPF = '$logado'";

        //roda o código no banco de dados
        $result =$conexao->query($sql);

        /*quando for confirmado, ele criara uma matriz associativa, podendo fazer com que eu pegue os 
        dados do banco e possa inserir numa variável*/
        while ($user_data = mysqli_fetch_assoc($result)){
            $nome = $user_data['nome_completo'];
            $cpf = $user_data['CPF'];
            $email = $user_data['email'];
            $endereco = $user_data['endereco'];
            $data_nascimento = $user_data['data_nascimento'];
            $saldo = $user_data['saldo'];
           }


?>

<!--Cabeçalho-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">   
    <link rel="stylesheet" href="css/conta1.css">
    <title>SS Bank's</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!--Div do Menu que separa todo o site -->
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
            <li class="lista ativa">
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

    <!--Botão para alternar entre o menu grande e o menu pequeno-->
    <div class="alternar">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
    </div>

    <!--Div Principal onde receberá as div's filhas-->
    <div class="main-cadastro">
        <!--Div da Esquerda Onde se encontra o saldo do Usuário-->
        <div class="left-cadastro">
            <div class="card-cadastro">
                <h1>Saldo Usuario</h1>  
                <h1>R$:<?php echo $saldo?></h1>
            </div>          
        </div>
        <!--Div da Direita onde se encontra os dados do Usuário-->
        <div class="right-cadastro">
            <div class="card-cadastro">
                <h1>Dados de Usuario</h1>
                <div class="textfield-1">
                    <label for="nome">Nome Completo</label>
                    <input type="text" disabled="disabled" name="nome" placeholder="<?php echo $nome?>">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" disabled="disabled" placeholder="<?php echo $cpf?>">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" disabled="disabled" placeholder="<?php echo $email?>">
                </div>
                <div class="textfield-2">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" disabled="disabled" placeholder="<?php echo $endereco?>">
                    <label for="data-nascimento">Data de Nascimento</label>
                    <input placeholder="<?php echo $data_nascimento?>" disabled="disabled" type="text" onfocus="(this.type = 'date')"  id="date">
                </div>
            </div>
        </div>
    </div>

</body>

<!--Import do JavaScript do menu e dos ícones-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/site.js"></script>

</html>