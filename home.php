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
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="height: 100vh; width: 100%;">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slider/modelo-demonstrando-brincos-e-anel.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img  class="d-block w-100" src="img/slider/jovem-modelo-morena-demonstrando-joias.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider/modelo-demonstrando-brincos.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
        <div class="d-block h-100" id="">
          <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex justify-content-start" id="menu-Carrosel">

            <form  method="post">
            <input type="submit" class=" btns-carrosel" id="btns-carrosel-todos" name="btns-carrosel-todos" value="Todos">     
</input>
           <input type="submit" class=" btns-carrosel" id="btns-carrosel-Aneis" name="btns-carrosel-Aneis" value="Aneis">      
</input>
           <input type="submit" class=" btns-carrosel" id="btns-carrosel-Colares" value="Colares">
        
</input>
           <input type="submit" class=" btns-carrosel" id="btns-carrosel-Brincos" value="Brincos">
           
</input>
            </form>

          
          </nav>
          <hr>
          <div class="d-block h-100 w-100 ">

        <div class="carousel-container">
    <div class="carousel" id="carousel">
      <?php 
      
      $sql = $mysqli->query("SELECT * FROM produtos");

      if(isset($_POST['btns-carrosel-todos'])) {
        $sql = $mysqli->query("SELECT * FROM produtos");
        while($produto = mysqli_fetch_assoc($sql)){
          echo '<a href=""><div class="card"><div class="h-100 m-2 d-flex flex-column p-2 justify-content:between shadow-sm p-3 mb-5 bg-white rounded " id="card-produto">
          <img class="card-img-top w-100 h-100" src="' . $produto['imagem'] . '.png" alt="">
          <div class="card-header">
          <h4 class="my-0 font-weight-normal name">' . $produto['nome_produto'] . '</h4>
        </div>
          <ul class="list-unstyled mt-3 mb-4">
            <p></p>
            <li class="name">R$ ' . $produto['preço'] . '</li>
            
          </ul>
          <button type="button" class="btn"><b class="name">+</b></button>
        </div></div></a>';
        }
      } else if(isset($_POST['btns-carrosel-Aneis'])) {
        $sql = $mysqli->query("SELECT * FROM produtos WHERE categoria = 'Anel'");
        while($produto = mysqli_fetch_assoc($sql)){
          echo '<div class="card"><div class="h-100 m-2 d-flex flex-column p-2 justify-content:between shadow-sm p-3 mb-5 bg-white rounded" id="card-produto">
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
      } else{
        while($produto = mysqli_fetch_assoc($sql)){

          echo '<div class="card"><div class="h-100 m-2 d-flex flex-column p-2 justify-content:between shadow-sm p-3 mb-5 bg-white rounded" id="card-produto" >
          <img class="card-img-top w-100 h-100" src="' . $produto['imagem'] . '.png" alt="">
          <div class="card-header">
          <h4 class="my-0 font-weight-normal name">' . $produto['nome_produto'] . '</h4>
        </div>
          <ul class="list-unstyled mt-3 mb-4">
            <p></p>
            <li class="name">R$ ' . $produto['preço'] . '</li>
            
          </ul>
          <form action="telaProdutos.php" method="post">
          <input type="submit" class="ver-produto" name="visualizar-produto" id="btn-Visualizar" value="Ver"></input>
          <input type="hidden" name="req_id" value="' . $produto['id'] . '"></input>
          </form>
          <a href="login.php" class="link-carLogin"><button type="button" class="btn btn-car"><b class="name">+</b></button></a>
        </div></div>';


        }
      }

      
      ?>



      <!-- Adicione mais cards conforme necessário -->
      </div>
  
    <button class="prev" onclick="prevSlide()"><span class="material-symbols-outlined">
arrow_back_ios_new
</span></button>
    <button class="next" onclick="nextSlide()"><span class="material-symbols-outlined">
arrow_forward_ios
</span></button>

  </div>
    </section>
    <script>
        <?php 
            echo file_get_contents('cards.js');
        ?>
    </script>
 
</body>
</html>