<?php
session_start();

 include_once('config.php');
if ((isset($_SESSION['email']) == true) and (isset($_SESSION['senha']) == true)){
    header('Location: index.php');
}

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maciella | Official Site</title>
    <script><?php
        echo file_get_contents('script.js');

        ?> </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        <?php
        echo file_get_contents('style.css');
        ?>
    </style>
    <style>
        <?php 
            echo file_get_contents('css/bootstrap.min.css');
        ?>
    </style>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex justify-content-between fixed-top" id="menu-home">
            <div class="d-none" id="link">
                <a class="navbar-brand" href="#">Contatos</a>
            </div>
            <div class="d-flex position-relative" id="container-logo">
                <h1 id="logo">Maciella</h1>
            </div>
            <div class="d-none" id="btn-login">
                <a class="navbar-brand" href="login.php"><span class="material-symbols-outlined">
                    account_circle
                    </span></a>
                
            </div>
            <div class="d-none" id="btn-carrinho">
                <a class="navbar-brand" href="#"><span class="material-symbols-outlined">
                    shopping_cart
                    </span></a>
            </div>
        </nav>
    </header>
    <section class="d-block" id="content">
        <div class="d-flex" id="card">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" style="height: 100vh; width: 100%;">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slider/modelo-demonstrando-brincos-e-anel.jpg" alt="First slide">
    </div>
  </div>

</div>
        </div>
        <div class="d-block h-100" id="">
            <h1 class="font-weight-normal name align-center mt-5 mb-5">Colares</h1>
            <p class="font-weight-normal name align-center mt-5 mb-5 container">
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.    
            .</p>
            <div class="container   ">
                <div class="row">
                    <div class="col font-weight-normal text-left">
                    <b>Filtrar</b>
                    </div>
                    <div class="col font-weight-normal text-right">
                    <b>Ordenar</b>
                    </div>
                </div>
            </div>

          <hr>

          <div class="d-block h-100 w-100 ">

        <div class="container">
    <div class="row" id="">
      <?php 
      
      $sql = $mysqli->query("SELECT * FROM produtos WHERE categoria = 'Colar'");
      while($produto = mysqli_fetch_assoc($sql)){
        echo '<div class="card col-md-5"><div class="h-100 m-2 d-flex flex-column p-2 justify-content:between shadow-sm p-3 mb-5 bg-white rounded" id="card-produto">
        <img class="card-img-top w-100 h-100" src="' . $produto['imagem'] . '.png" alt="">
        <div class="card-header">
        <h4 class="my-0 font-weight-normal name">' . $produto['nome_produto'] . '</h4>
      </div>
        <ul class="list-unstyled mt-3 mb-4">
          <p></p>
          <li class="name">R$ ' . $produto['preço'] . '</li>
          
        </ul>
        <button type="button" class="btn"><b class="name">+</b></button>
      </div></div>';
      } 
      ?>



      <!-- Adicione mais cards conforme necessário -->
      </div>
  

  </div>
    </section>

    <script>
        <?php 
            echo file_get_contents('cards.js');
        ?>
    </script>
 
</body>
</html>