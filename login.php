<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Maciella</title>
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

    <section class="d-flex position-relative" id="section-login">
        <div class="d-flex position-relative" id="login-form">
            <div class="d-block position-relative" id="titulo">
                <h1>Login</h1>
            </div>
            <div class="d-flex position-relative" id="campos-Login">
                <form action="testeLogin.php" method="POST" id="formulario-login">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="" id="exampleInputEmail1" aria-describedby="emailHelp" name='email'>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password"  id="exampleInputPassword1" name="senha">
                    </div>
                    <input type="submit"  id="submit" name='submit' value="Enviar">
                    <a href="formulario.php"><button type="button" class="" id="subscribe-btn">increver-se</button></a>

                  </form>
            </div>
        </div>
    </section>
</body>
</html>