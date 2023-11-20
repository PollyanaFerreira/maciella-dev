<?php
session_start();

include_once('config.php');
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: home.php');
} else{
    $logado = $_SESSION['email'];


    if(isset($_POST['submit']))
    {
    include_once('config.php');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $data_nasc = $_POST['data_nascimento'];

    //$result = mysqli_query($mysqli, "UPDATE usuarios SET telefone = '$telefone',nome = '$nome',email = '$email',senha = '$senha',data_nasc = '$data_nasc' WHERE email = $_SESSION['email']");
    
    header('Location: user.php');
    }
    
if(isset($_POST['sair'])){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: home.php');
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User | Maciella</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="user.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex justify-content-between fixed-top " id="menu-home">
            <div class="d-flex" id="link">
                <a class="navbar-brand" href="#">Contatos</a>
            </div>
            <div class="d-flex position-relative" id="container-logo">
                <a  id="logo" href="index.php"><h1>Maciella</h1></a>
            </div>
            <div class="d-flex" id="btn-login">
                <a class="navbar-brand" href="#"><span class="material-symbols-outlined">
                    account_circle
                    </span></a>
                
            </div>
            <div class="d-flex" id="btn-carrinho">
                <a class="navbar-brand" href="#"><span class="material-symbols-outlined">
                    shopping_cart
                    </span></a>
            </div>
        </nav>
    </header>
    <div class="d-flex justify-content-start">
    <div class="" id="nave-menu">
        <div class="d-block" id="links-nave">
        <a class="d-block" href="#itens-info">Informações da Conta</a>
        <a class="d-block" href="">Minhas Compras</a>
        <a class="d-block" href="">Informações da Conta</a>
        </div>
        
    </div>
    <div class="" id="infos">
        <div id="itens-info">
        <h1>Minha Conta</h1>
    <?php

$sql = $mysqli->query("SELECT * FROM usuarios WHERE email = '$logado'");
while($user = mysqli_fetch_assoc($sql)){
    if ($user["sexo"] == 'masculino'){
    echo "<h1 id='usarname'>Bem vindo: " . $user["nome"] . ".</h1>";
    }if ($user["sexo"] == 'feminino'){
    echo "<h1 id='usarname'>Bem vinda: " . $user["nome"] . ".</h1>";
    }






?>
<div class="d-flex position-relative" id="campos-up">
                <form action="user.php" method="POST" id="formulario-update">
                    <fieldset>
                    <div class="mb-3">
                       
                        <label for="nome" class="labelInput">Nome completo</label>
                        <input type="text" name="nome" id="nome" class="inputUser" placeholder='<?php 
                            echo $user['nome'];


                        ?>' >
                    </div>
                    <div class="mb-3">
                    <label for="email" class="labelInput">Email</label>
                        <input type="text" name="email" id="email" class="inputUser" placeholder='<?php 
                            echo $user['email'];


                        ?>'>
                       
                    </div>
                    <div class="mb-3">
                    <label for="senha" class="labelInput">senha</label>
                        <input type="password" name="senha" id="senha" class="inputUser" placeholder='<?php 
                            echo $user['senha'];


                        ?>' >
                        
                      </div>
                      <div class="mb-3">
                      <label for="telefone" class="labelInput">Telefone</label>
                      <input type="tel" name="telefone" id="telefone" class="inputUser" placeholder='<?php 
                            echo $user['telefone'];
}
}
                        ?>' >
                   
                      </div>
           

                      <div class="mb-3">
                        <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                        <input type="date" name="data_nascimento" id="data_nascimento">
                      </div>
                    <input type="submit" name="submit" id="submit"></input>
                    </fieldset>
                  </form>
            </div>
    <form action="user.php" method="POST">
    <button type="submit" name="sair" id="logout">Sair</button>
</form>
        </div>
      
    </div>
    </div>


</body>
</html>