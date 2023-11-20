<?php
include_once('config.php');
include_once('telaProdutos.php');
$idProduto = $_SESSION['req_id'];
$sql = $mysqli->query("SELECT * FROM produtos WHERE id = '$idProduto'");




?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produto:</h1>
    <?php 
    
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
    ?>
</body>
</html>