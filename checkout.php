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
        <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex justify-content-between fixed-top" id="menu-home-checkout">
            <div class="d-none" id="link">
                <a class="navbar-brand" href="#">Contatos</a>
            </div>
            <div class="d-flex position-relative" id="container-logo">
                <h1 id="logo-checkout">Maciella</h1>
            </div>
            <div id="btn-login-2">
                <a class="" href="login.php"><span class="material-symbols-outlined">
                    account_circle
                    </span></a>
                    <a class="" href="#"><span class="material-symbols-outlined">
                    shopping_cart
                    </span></a>
            </div>
        </nav>
    </header>

</div>
    <br><br><br><br><br><br><br>
  

    <?php
// Verifique se o parâmetro 'id' está presente na URL
if (isset($_GET['id'])) {
    // Supondo que você está usando MySQLi
    $produto_id = $_GET['id'];
    $sql = $mysqli->query("SELECT * FROM produtos WHERE id = $produto_id");

    // Verifique se há um resultado
    if ($produto = mysqli_fetch_assoc($sql)) {
?>
<div class="container-fluid mt-5 mb-5">
  <div class="row">
    <!-- Três imagens pequenas -->
    <div class="col-md-1">
      <?php
        // Um loop para gerar as imagens duplicadas
        for ($i = 1; $i <= 3; $i++) {
            echo '<img src="' . $produto['imagem'] . '.png" class="img-fluid mb-4" alt="Imagem ' . $i . '" height="190" width="190"></br>';
        }
      ?>
    </div>

    <!-- Imagem grande e div de texto -->
    <img class="col-md-6" src="<?= $produto['imagem'] ?>.png" height="570" width="530">
    <div class="col-md-5">
        <h1 class="font-weight-normal normal"><?= $produto['nome_produto']; ?></h1>
        <p class="font-weight-normal mt-5">
        <?= nl2br($produto['descrição']); ?>
        <h1>
            <b>R$ <?= number_format($produto['preço'], 2, ',', '.'); ?></b>
        </h1>
        <p>Pagamento em até 10x sem juros.</p>

        <button class="btn btn-lg btn-dark btn-block">ADICIONAR A SACOLA</button>

    </div>
  </div>

    <hr class="hw-100">

    <div class="row mt-3">
        <div class="col-md-12">
            <h3>Detalhes</h3>
            <p class="font-weight-normal mt-2">
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
        </div>
    </div>

</div>
<?php
    } else {
        echo "Produto não encontrado.";
    }
} else {
    echo "ID do produto não especificado.";
}
?>



    <script>
        <?php 
            echo file_get_contents('cards.js');
        ?>
    </script>
 
</body>
</html>