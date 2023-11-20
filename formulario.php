<?php

if(isset($_POST['submit']))
{
include_once('config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$sexo = $_POST['genero'];
$data_nasc = $_POST['data_nascimento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];



$result = mysqli_query($mysqli, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc,endereço,cidade,estado) VALUES ('$nome','$email','$senha','$telefone','$sexo','$data_nasc','$endereco','$cidade','$estado')");

header('Location: login.php');
}

?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe | Maciella</title>
    <link rel="stylesheet" href="login.css">
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
                <a class="navbar-brand" href="login.php"><span class="material-symbols-outlined">
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
    <section class="d-flex position-relative" id="section-login">
        <div class="d-flex position-relative" id="login-form">
            <div class="d-block position-relative" id="titulo">
                <h1>Cadastrar-se</h1>
            </div>
            <div class="d-flex position-relative" id="campos-Login">
                <form action="formulario.php" method="POST" id="formulario-login">
                    <fieldset>
                    <div class="mb-3">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome completo</label>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">Email</label>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelInput">senha</label>
                      </div>
                      <div class="mb-3">
                      <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                      </div>
                      <p>Sexo:</p>
                      <div class="mb-3 form-check form-check-inline" id="escolhaSexo">
                        
                            <input class="form-check-input" type="radio" id="feminino" name="genero" value="feminino" required>
                            <label class="form-check-label" for="feminino">Feminino</label>
                            <br>
                            <input  class="form-check-input" type="radio" id="masculino" name="genero" value="masculino" required>
                            <label class="form-check-label" for="masculino">Masculino</label>
                            <br>
                            <input class="form-check-input"  type="radio" id="outro" name="genero" value="outro" required>
                            <label class="form-check-label"  for="outro">Outro</label>
                            <br><br>
                      </div>

                      <div class="mb-3">
                        <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                        <input type="date" name="data_nascimento" id="data_nascimento" required>
                      </div>
                      <div class="mb-3">
                        <input type="text" name="cidade" id="cidade" class="inputUser" required>
                        <label for="cidade" class="labelInput">Cidade</label>
                      </div>
                      <div class="mb-3">
                        <input type="text" name="estado" id="estado" class="inputUser" required>
                        <label for="estado" class="labelInput">Estado</label>
                      </div>
                      <div class="mb-3">
                        <input type="text" name="endereco" id="endereco" class="inputUser" required>
                        <label for="endereco" class="labelInput">Endereço</label>
                      </div>
                    <input type="submit" name="submit" id="submit"></input>
                    </fieldset>
                  </form>
            </div>
        </div>
    </section>
</body>
</html>